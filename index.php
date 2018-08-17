<?php
include_once("config.php");

$sql = new Sql;

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

$user = new Usuario;

$user->setName("Emilie");
$user->setLogin("emilie");
$user->setPassword("nina");

$usuario = $user->insert();

echo json_encode($usuario);

?>