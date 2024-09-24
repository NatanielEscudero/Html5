


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

    <form method="POST" action="pagina2.php" >
        <h1 class="title">Inicia sesion</h1>
        
            <i class="fa-solid fa-user"></i>
            <input placeholder="username" type="text" id="username" name="username">
        
        
            <i class="fa-solid fa-lock"></i>
            <input placeholder="password" type="password" id="password" name="password">
        
        <a href="#" class="link">Olvidaste tu contraseña?</a>

        <input type="submit" value="iniciar sesion" id="button" name="button">
    </form>
    
    <?php

    if(isset($_POST['button'])){

        include("conexion.php");

    if (empty($_POST["username"]) and empty($_POST["password"])){
    }
    else{

        $usuario=$_POST["username"];
        $contraseña=$_POST["password"];

        $sql=mysqli_query($conexion," SELECT * FROM usuarios WHERE username='$usuario' AND password='$contraseña' ");

        if($datos=$sql->fetch_object()){

            header("location:pagina1.php");
            exit;

        }
        else{

            echo "Ese usuario no existe";

        }

    }

    }

    ?>

</body>
</html>