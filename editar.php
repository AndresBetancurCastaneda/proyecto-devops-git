<?php
$usuarios = json_decode(file_get_contents("data/usuarios.json"), true);
$id = $_GET['id'];

foreach($usuarios as $u){
    if($u['id'] == $id){
        $usuario = $u;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Editar</h3>
<form action="actualizar.php" method="POST">
<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
<input class="form-control mb-2" type="text" name="nombre" value="<?= $usuario['nombre'] ?>">
<input class="form-control mb-2" type="email" name="email" value="<?= $usuario['email'] ?>">
<button class="btn btn-success">Actualizar</button>
</form>

</body>
</html>
