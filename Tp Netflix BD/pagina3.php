


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="estilo2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <form method="POST" action="pagina3.php" >
        <h1 class="title">registrarse</h1>
        
            <i class="fa-solid fa-user"></i>
            <input placeholder="Nombre de usuario" type="text" id="username" name="username">
            
            <input placeholder="Correo Electronico" type="text" id="username" name="Correo">
        
            <i class="fa-solid fa-lock"></i>
            <input placeholder="Contraseña" type="password" id="password" name="password">

        <input type="submit" value="Registrarse" id="button" name="button">
    </form>
    
    <?php

    if(isset($_POST['button'])){

        include("conexion.php");

        $nombre = $_POST['username'];
        $correo = $_POST['Correo'];
        $password = $_POST['password'];

        $conexion->query("INSERT INTO usuarios (username,password,email) values ('$nombre','$password','$correo')");

    }

    ?>

</body>
</html>