<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "FC CLIENTES" ?>
    
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
            $mensaje = $_POST['consulta'];
            
            $destinatario = 'facundocalleja@hotmail.com';
            
            // Agregado fecha de envio -> DATE (0000-00-00)
             $fechaEnvio = date ("Y-m-d");
            
            // Definir los datos de la conexion con variables
            $host = 'localhost';
            $user = 'id17237158_facucalleja';
            $password = 'Facu-37550462';
            $bbdd = 'id17237158_facuwebaster2021';

echo "<br>";

             //Enviar todo esto a MySQL

             
             
             //1) Conexion -> mysqli_connect('servidorMySQL','UserMySQL','Password_User_MySQL','nombreBD')

             $conexion = mysqli_connect($host,$user,$password,$bbdd) or exit("Error en la conexion."); //tambien podemos usar die()
             
             if ($conexion === true) {
                 echo "conexion exitosa";
             } else {echo "error en conexion";
             }
                
                
             //2) mysqli_query(conexion, consultaMySQL)
             
             // Consulta 1 -> nuevo Contacto
             $consulta_alta = "INSERT INTO contactos VALUES (nombre,apellido,telefono,email,mensaje,fecha envio) VALUES('$nombre', '$apellido', '$telefono', '$email' ,'$mensaje','$fechaEnvio')";
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



