<?php
$usuarios = json_decode(file_get_contents("data/usuarios.json"), true);
$id = $_GET['id'];

$nuevo = [];
foreach($usuarios as $u){
    if($u['id'] != $id){
        $nuevo[] = $u;
    }
}

file_put_contents("data/usuarios.json", json_encode($nuevo));
header("Location: index.php");
?>

