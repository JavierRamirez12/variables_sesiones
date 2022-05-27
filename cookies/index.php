<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
}
if (isset($_SESSION['user'])) {
    header('Location: bienvenida.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Jaiver Program</title>
</head>

<body background="IMG/bg-signup.jpg" style="background-size: no-repeat; background-position: center center;">
<center><br><br><br><FONT FACE="Time new Roman"><h1 style="color:#77243f" class="mx-auto my-0 text-uppercase">Mensaje</h1></center>
                        <br>
        <form action="" method="post">
        <form class="p-5" action="index.php" method="POST">
            <center>
                <div class="card" style="width: 50rem;">
                    <img src="icons8_a_24px.png" alt="..." width="50px" height="50px">
                    <div class="card-body">
                        <h5 class="card-title">INGRESO DE USUARIOS</h5>
                        <p class="card-text">
                            <input type="user" name="user" class="form-control" placeholder="Introduzca su usuario">
                            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                        </p>
                    </div>
                </div>
            </center>
        </form>
    </main>
    <?php
    if (isset($_POST['user']) && !empty($_POST['user'])) {
        $user = $_POST['user'];
        $_SESSION['user'] = $user;

        if (isset($_COOKIE[$user])) {
            setcookie($user, $_COOKIE[$user] + 1, time() + 3600);
        } else {
            setcookie($user, 1, time() + 3600);
        }
        header('Location: bienvenida.php');
    }
    ?>
</body>
</html>