<?php

class Usuario extends Sql
{
    private $id;
    private $name;
    private $login;
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

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
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

    public function setData($data){

        $this->setName($data['name']);
        $this->setLogin($data['login']);
        $this->setPassword($data['password']);

    }

    public function insert(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_users_insert(:name, :login, :password)", array(":name" => $this->getName(),":login" => $this->getLogin(), ":password" => $this->getPassword()));

        if(count($results) > 0){
            
            //$this->setData($results[0]);

            return $results;

        }
    }
}


?>