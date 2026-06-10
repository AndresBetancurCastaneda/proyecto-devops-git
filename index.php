<?php
$usuarios = json_decode(file_get_contents("data/usuarios.json"), true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Proyecto CRUD de Devops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Agregar Usuario</h3>
<form action="guardar.php" method="POST">
    <input class="form-control mb-2" type="text" name="nombre" placeholder="Nombre">
    <input class="form-control mb-2" type="email" name="email" placeholder="Email">
    <button class="btn btn-primary">Guardar</button>
</form>

<hr>

<h3>Lista</h3>
<table class="table">
<tr><th>ID</th><th>Nombre</th><th>Email</th><th></th></tr>

<?php if($usuarios): ?>
<?php foreach($usuarios as $u): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['nombre'] ?></td>
<td><?= $u['email'] ?></td>
<td>
<a class="btn btn-warning btn-sm" href="editar.php?id=<?= $u['id'] ?>">Editar</a>
<a class="btn btn-danger btn-sm" href="eliminar.php?id=<?= $u['id'] ?>">X</a>
</td>
</tr>
<?php endforeach; ?>
<?php endif; ?>

</table>

</body>
</html>