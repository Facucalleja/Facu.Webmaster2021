<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "DEFENDIENDO TU DERECHO" ?>
    
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
    
    <?php
    include "header.html";
    ?>

      
    <div class="container">
    <div class="form w-75">
        <h2>Muchas gracias por contactarnos</h2>
        <hr>
        <h3>Estos son los datos que hemos recibido:</h3>
        <hr>
        <?php
            // Cantidad de datos en POST
            echo "<span>Cantidad de datos: </span>"; echo count($_POST); 
            echo "<br>";

            // echo "Datos recibidos";

            // Recorrer el array POST
            foreach($_POST as $datos){
             echo $datos."<br>";
            // }

            // $_POST['nombre'] 
            // $_POST['email'] 
            // $_POST['mensaje'] 

    
            //1) Definir los datos a enviar -> armar el array POST
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email =  $_POST['email'];
            $telefono = $_POST['telefono'];
            $localidad = $_POST['localidad'];
            $genero = $POST['genero']
            $consulta = $_POST['consulta'];
            

            //2) Cargar los datos a enviar -> destino, asunto, mensaje
            $destinatario = 'info@defendiendotuderecho.com;facundocalleja@hotmail.com';
            $asunto = "Nuevo mensaje del sitio WEB"
            $cuerpomensaje = "Nombre:".$nombre.$apellido."<br>Email:".$email."<br>Telefono:".$telefono."<br>Localidad:".$localidad."<br>Genero:".$genero."<br>Consulta:".$consulta;
        
            // Agregado fecha de envio -> DATE (0000-00-00)
             $fechaEnvio = date ("Y-m-d");
            
             //3) Enviar los datos
             $envio1 = mail($destinatario,$asunto,$cuerpomensaje);



             

            // Definir los datos de la conexion con variables
            $host = 'sql309.epizy.com';
            $user = 'epiz_29225402';
            $password = 'ww1Nj3A2ic6jG8s';
            $bbdd = 'epiz_29225402_fcestudio';

           

echo "<br>";

             //Enviar todo esto a MySQL

             
             
             //1) Conexion -> mysqli_connect('servidorMySQL','UserMySQL','Password_User_MySQL','nombreBD')

             $conexion = new mysqli_connect($host,$user,$password,$bbdd) or exit("Error en la conexion."); //tambien podemos usar die()
             
             if ($conexion === true) {
                 echo "conexion exitosa";
             } else {echo "error en conexion";
             }
                
                
             //2) mysqli_query(conexion, consultaMySQL)
             
             // Consulta 1 -> nuevo Contacto
             $consulta_alta = "INSERT INTO `contactos` VALUES('','$nombre', '$apellido', '$telefono', '$email' ,'$mensaje','$fechaEnvio')";
             $consulta = mysqli_query($conexion,$consulta_alta); 
             
             //verificar si se hace la consulta
             $resultado=$conexion->query($consulta_alta);

             if ($resultado === true) {
                 echo "datos insertados correctamente";
                 }
                 else {echo "Los datos no se insertaron";
                }

             // Consulta 2 -> suscripcion
             if( isset($_POST['newsletter']) ){
                
                //$news = $_POST['newsletter'];
                $alta_suscripcion = mysqli_query($conexion,"INSERT INTO suscripcion VALUES(0, '$nombre','$email')");
            }
            else {echo "No se agrego el usuario a Newsletter";}
             
             //3) mysqli_close()
             $cerrarConexion = mysqli_close($conexion); 
            } 
            

        ?>
    </div>
</div>


</body>
</html>