<?php 

$pagina = "index";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Crud/styles/style.css">
    <title>Practica</title>
</head>
<body>

<div class="header">
    <h1 class="header__titulo"><?= $pagina = "index" ? "Login" : $pagina = "crear" ? "Crear Cuenta" : '' ?></h1>
        <ul>
            <a class="nav__link" href="#">Inicio</a>
            <a class="nav__link" href="#">Sobre Nosotros</a>
            <a class="nav__link" href="#">Iniciar Sesión</a>
        </ul>
    </div>
</div>

    <main class="container">
        <form action="" class="formulario">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario">
        <label for="password">Contraseña</label>
        <input type="text" id="password">
        <input class="boton" type="submit" value="Iniciar Sesión">

        <div class="form__crearCuenta">
            <p>¿No tiene una cuenta? <a class="crear-cuenta" href="/CRUD/crear.php">Crear Cuenta</a></p>
        </div>
        </form>
    </main>

   