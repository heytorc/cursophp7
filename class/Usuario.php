<?php

class Usuario extends Sql
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
    
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function __construct(){
        
    }

    public function login($login, $password){

        $sql = new Sql();

        $result = $sql->select("SELECT * FROM users WHERE login = :login AND password = :password", array(":login" => $login, ":password" => $password));

        return $result;

    }

    public static function search($name){

        $sql = new Sql();

        return $sql->select("SELECT * FROM users WHERE name LIKE :name ORDER BY name", array(":name" => "%".$name."%"));

    }
}


?>