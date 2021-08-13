<?php

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