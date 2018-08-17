<?php
include_once("config.php");

$sql  = new Sql;
$user = new Usuario;

// $query 	= "SELECT * FROM users WHERE id = :id ORDER BY name";
// $params = array(":id" => 1);

// $dados 	= $sql->select($query, $params);

// $query  = "UPDATE users SET name = :nmUsuario WHERE id = :id";
// $params = array(":id" => 1, ":nmUsuario" => "Heytor Cavalcanti");

// $result = $sql->update($query, $params);

// var_dump($result);

//$search = Usuario::search("");

//echo json_encode($search);

//$user = new Usuario;
//$auth = $user->login("heytor", "admin");

//var_dump($auth);


//$user->setName("Emilie");
//$user->setLogin("emilie");
//$user->setPassword("nina");

//$usuario = $user->insert();

//echo json_encode($usuario);

$usuario = $user->loadById(1);

$user->setId($usuario[0]->id);
$user->setName("Heytor Cavalcanti de Moura");
$user->setLogin("heytor");
$user->setPassword("123");

$upd = $user->update();

var_dump($user);

?>