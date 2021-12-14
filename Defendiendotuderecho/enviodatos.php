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
        
        <?php
            
            
            //1) Definir los datos a enviar -> armar el array POST
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email =  $_POST['email'];
            $telefono = $_POST['telefono'];
            $localidad = $_POST['localidad'];
            $genero = $POST['genero'];
            $consulta = $_POST['consulta'];
            
            
            //2) Cargar los datos a enviar -> destino, asunto, mensaje
            $destinatario = "info@defendiendotuderecho.com";
            $asunto = "Nuevo mensaje del sitio WEB";
            $cuerpomensaje = "Nombre:".$nombre.$apellido."<br>Email:".$email."<br>Telefono:".$telefono."<br>Localidad:".$localidad."<br>Genero:".$genero."<br>Consulta:".$consulta;
            
            
            //Bonustrack: headers +  formato HTML
            // Para enviar un correo HTML, debe establecerse la cabecera Content-type
            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            // Cabeceras adicionales
            $cabeceras .= 'To:'.$destinatario;
            $cabeceras .= 'From:'. $nombre.'<'.$email.'>' . "\r\n";
            // Agregado fecha de envio -> DATE (0000-00-00)
            $fechaEnvio = date ("Y-m-d");
            
            //3) Enviar los datos
            @$envio1 = mail($destinatario,$asunto,$cuerpomensaje);
            
            
            //4) Validar el envio   
            if($envio1 === True){
                echo "<div class='align-content-center'><h4>Gracias ".$nombre." por escribirnos. Nos comunicaremos a la brevedad</h4></div>";
            } else {
                echo "<h4> Ups! Hubo un error en el envio. Escribinos a: ".$destinatario." y te estaremos contactando a la brevedad</h4>";
                
            }

            
            
            ?>


    </div>
</div>

<footer class="container-fluid footer">
    <div class="row">
        
        <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <figure class="smicono iconocontacto">
                <img src="../imagenes/iconos/ubicacion.70px.png" alt="ubicacion">
            </figure>
            
            <h4 class="smnone">OFICINAS</h4>
            <p>
               *Av. Ramirez N° 1180 - Parana E.R. <br>
               *Bv.Galvez N° 2030 - Santa Fe <br>
               *Urquiza 934 - La Paz E.R.  
            </p>  

        </div>


        <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <figure class="smiconomail iconocontacto">             
                <img class="smiconomail" src="../imagenes/iconos/email.80px.png">
            </figure>
            <a href="mailto:info@defendiendotuderecho.com"><h4>info@defendiendotuderecho.com</h4></a>

        </div>

        <div class="smnone d-sm-none d-md-none d-lg-block d-xl-block col-xl-4 col-lg-4">
            <div class="row iconosredes">

                <div class="col">
                    <img src="../imagenes/iconos/facebook.icono.chico.png" alt="facebook">
                </div>
                <div class="col">
                    <img src="../imagenes/iconos/twitter.icono.chico.png" alt="twitter">
                </div>
                <div class="col">
                    <img src="../imagenes/iconos/instagram.icono.chico.png" alt="Instagram">
                </div>
            </div>
            <h4>@Defendiendotuderecho</h4>
        </div>

        <figure class="logofooter">
            <img src="/imagenes/logoclaromtschico.png" alt="logoestudio">
        </figure>
            <div class="copyright">
                &copy; Todos los derechos reservados 
            </div>
       
        

    </div>

</footer>



<!-- JavaScript Bundle with Popper -->
<script src="/navprueba.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
