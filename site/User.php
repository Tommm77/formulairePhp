<?php
 class User{
    private $id;
    private $lastName;
    private $firstName;
    private $password;
    private $email;

    public function __construct($id, $firstName, $lastName, $password, $email)  {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
        $this->email = $email;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getLastname(){
        return $this->lastName;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFullName() {
        return $this->lastName .' ' . $this->firstName;
    }
}
    ?>