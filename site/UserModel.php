<?php 

class UserModel {

    private $connexion;
    public function __construct(Connexion $connexion) {
        $this->connexion = $connexion;
    }

    public function create(User $user) {
    

        $sth = $this->connexion->prepare("
            INSERT INTO users(firstname, lastname, email, password)
            VALUES(:firstname, :lastname, :email, :password)");
        $sth->bindParam(':firstname',$user->getfirstName());
        $sth->bindParam(':lastname',$user->getlastName());
        $sth->bindParam(':email',$user->getemail());
        $sth->bindParam(':password',$user->getpassword());
        $sth->execute();
        
        $id=$this->connexion->lastInsertId();
        //$dbco->lastInsertId();
    

        return new User(
            $id,
            $user->getFirstName() ,
            $user->getLastName(),
            $user->getPassword(),
            $user->getEmail()
        );
          
    }

    public function getUserByEmail(string $email) : User {
        //SELECT
        $req = $this->connexion->prepare('SELECT * FROM users WHERE email=?');
        if($req->execute(array($email))){
           $result = $req->fetch();
           return new User(
            $result['Id'],
            $result['firstname'],
            $result['lastname'],
            $result['password'],
            $result['email']
           );
          
        }

       


    }

    public function getUserById(int $id) : User {
        //SELECT
        $req = $this->connexion->prepare('SELECT * FROM users WHERE Id=?');
        if($req->execute(array($id))){
           $result = $req->fetch();
           if($result==true){
            return new User(
                $result['Id'],
                $result['firstname'],
                $result['lastname'],
                $result['password'],
                $result['email']
            );
            }
            else{
                throw new Exception("User id non existante", 500);
            }
        }
    }
    public function delete(User $user) {
        //cette forme un peu près
        $sth = $this->connexion->prepare("DELETE FROM Users WHERE Id=?");
        $sth->execute(array($user->getId()));
    }

    public function update(User $user) {
        //cette forme un peu près
        $sth = $this->connexion->prepare("UPDATE Users SET lastname=? WHERE id=?");
        $sth->execute(array($user->getlastName(),$user->getId()));
    }
    public function lister():iterator{
        $sth = $this->connexion->prepare("SELECT * FROM Users");
        $sth->execute();
        while($user=$sth->fetch()){
        yield new User(
            $user['Id'],
            $user['firstname'],
            $user['lastname'],
            $user['password'],
            $user['email']
           );
        }
    }
}