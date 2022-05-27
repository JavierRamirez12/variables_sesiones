<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cookies y Sesiones - bienvenida - JR</title>
    <link rel="icon" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-5">
    <main class="p-5">
    <center> <div class="card" style="width: 50rem;">
            <img src="icons8_a_24px.png"  alt="..." width="50px" height="50px">
            
                <div class="card-body">
                    <h5 class="card-title">USUARIOS</h5>
                    <p class="card-text">
                    <div class="p-5">
                        <?php
                        echo '<h1>Bienvenido usuario ' . $_SESSION['user'] . '</h1>';
                        echo '<h1>Total de logins realizados: ' . $_COOKIE[$_SESSION['user']] . '</h1>';
                        ?>
                    </div>
                    </p>
                    <a href="index.php?logout=true" class="btn btn-primary">CERRAR SESSION</a>
                </div>
        </div>

    </main>

</body>

</html>