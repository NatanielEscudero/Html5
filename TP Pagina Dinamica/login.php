
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página del Banco de la Provincia</title>
    <link rel="stylesheet" href="Source/css/estilo1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <form method="POST" action="pagina2.php" >

        <div class="formulario-superior">
            <img src="Source/svg/logo_mobile_bip.svg" class="menu" id="menu">
        </div>


        <div class="formulario-campos">
            <h1 class="title">Iniciá sesión</h1>
        
            <div class="formulario-campo-usuario">
            
                  <h1 class="texto-campo">Tu usuario</h1>
                 <input placeholder="Ingresá tu nombre de usuario" type="text" id="username" name="username" class="campo">

            </div>
            
            <div class="formulario-campo-contraseña">
                
                <h1 class="texto-campo">Tu clave</h1>
                <input placeholder="Ingresá tu clave" type="password" id="password" name="password" class="campo">
    
            </div>
        </div>

        <div class="formulario-inferior">
            <input type="submit" value="ingresar" class="boton-ingresar" id="button" name="button">
            <a href="#" class="link">Bloqueé u olvidé mi usuario y/o clave</a>
        </div>
        
    </form>

    <?php

    if(isset($_POST['button'])){

        include("conexion.php");

    if (empty($_POST["username"]) and empty($_POST["password"])){
    }
    else{

        $usuario=$_POST["username"];
        $contraseña=$_POST["password"];

        $sql=mysqli_query($conexion," SELECT * FROM Usuarios WHERE username='$usuario' AND password='$contraseña' ");

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