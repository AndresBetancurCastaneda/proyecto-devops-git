<?php
$usuarios = json_decode(file_get_contents("data/usuarios.json"), true);

$id = count($usuarios) + 1;

$usuarios[] = [
    "id" => $id,
    "nombre" => $_POST['nombre'],
    "email" => $_POST['email']
];

file_put_contents("data/usuarios.json", json_encode($usuarios));

header("Location: index.php");
?>