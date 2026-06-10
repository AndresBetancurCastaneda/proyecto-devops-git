<?php
$usuarios = json_decode(file_get_contents("data/usuarios.json"), true);

foreach($usuarios as $i => $u){
    if($u['id'] == $_POST['id']){
        $usuarios[$i]['nombre'] = $_POST['nombre'];
        $usuarios[$i]['email'] = $_POST['email'];
    }
}

file_put_contents("data/usuarios.json", json_encode($usuarios));
header("Location: index.php");
?>