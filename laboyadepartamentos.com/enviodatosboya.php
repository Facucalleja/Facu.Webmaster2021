<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Boya - Departamentos</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="stylesheet" href="/laboya.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  
  <!-- Datapicker Jquery -->
 
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  
    $( function() {
      $( "#datepicker2" ).datepicker();
    } );
    </script>


</head>


<body id="contenedorgeneral">

  <div class="navtop container-fluid">  

  </div>

    <nav id="menugrande" class="container-fluid sticky-top navbarpadel">
       
        <ul class="nav justify-content-between align-content-center">
            <li class="nav-item">
                <figure class="logonav">
                   <a href="index.html"> <img  src="/img/laboyagris.yanone55.png" class="img-fluid logonav" alt="logopadel"></a>
                </figure>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#registro"></a>
            </li>
          
            <li class="nav-item dropdown">
                
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DEPARTAMENTOS</a>
                    <div class="dropdown-menu rankingdrop">
                      <a class="dropdown-item" href="servicios.html#galeria">4/5 pax</a>
                      <a class="dropdown-item" href="servicios.html#galeria">5/6 pax</a>
                      
                  
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="servicios.html#nuestrosservicios">SERVICIOS</a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="#ubicacion">UBICACION</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="index.html#contacto">CONTACTO</a>
            </li>
            
          </ul>

      
      
      
      
                  
    </nav>  






<!-- MENU PARA CELULAR    MENU HAMBURGUESA-->
        <!-- MENU PARA CELULAR    MENU HAMBURGUESA-->
                   <!-- MENU PARA CELULAR    MENU HAMBURGUESA-->
        


      <nav id="menusm" class="container-fluid sticky-top flex-column align-content-center navbarpadel">

      
        
          <div class="row navbar navnarsm">
              
              <figure class="col-6">
                  <a href="index.html">
                    <img  src="img/laboyagris.yanone55.png" class="img-fluid" alt="logopadel">
                  </a>
              </figure>
              
                   
                  
                    
              <div class="col-3">
  
                  
                <div class="hamburger">
                  <div class="_layer -top"></div>
                  <div class="_layer -mid"></div>
                  <div class="_layer -bottom"></div>
                </div>
                <nav class="menuppal">
                    <ul>
                      <li><a href="servicios.html#galeria">DEPARTAMENTOS</a></li>
                      <li><a href="servicios.html#nuestrosservicios">SERVICIOS</a></li>
                      <li><a href="index.html#contacto">CONTACTO</a></li>
                      <li><a href="#ubicacion">UBICACION</a>  <a class="m-3" href="/index.html">/ Salir</a></li>
                      
                    </ul>
                  </nav>
                  </div> 
                  
              </div>
                  
          </div>
                 
           
       </nav>
        
       

            
        </div>
 
        
        
        
        
        <div class="container">
            <div class="form w-75 echo">
                
                <?php
            
            
            //1) Definir los datos a enviar -> armar el array POST
            $nombre = $_POST['nombre'];
            $email =  $_POST['email'];
            $telefono = $_POST['telefono'];
            $fechadesde = $_POST['desde'];
            $fechahasta = $_POST['hasta'];
            $consulta = $_POST['textarea'];
            
            
            //2) Cargar los datos a enviar -> destino, asunto, mensaje
            $destinatario = "alesarubi@outlook.com";
            $asunto = "Nuevo mensaje del sitio WEB - La Boya";
            $cuerpomensaje = "Nombre:".$nombre."<br>Email:".$email."<br>Telefono:".$telefono."<br>Fechas interesadas:".$fechadesde."-".$fechahasta."<br>Consulta:".$consulta;
            
            
            //Bonustrack: headers +  formato HTML
            // Para enviar un correo HTML, debe establecerse la cabecera Content-type
            $cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            // Cabeceras adicionales
            $cabeceras .= 'To:'.$destinatario;
            $cabeceras .= 'From:'. $nombre.'<'.$email.'>' . "\r\n";
            // Agregado fecha de envio -> DATE (0000-00-00)
            $fechaEnvio = date ("Y-m-d");
            
            //3) Enviar los datos
            @$envio1 = mail($destinatario,$asunto,$cuerpomensaje,$cabeceras);
            
            
            //4) Validar el envio   
            if($envio1 === True){
                echo "<div class='mensajecontacto m-4 align-content-center'><h4 class='m-3'>Gracias ".$nombre." por escribirnos. Nos comunicaremos a la brevedad</h4></div>";
            } else {
                echo "<h4> Ups! Hubo un error en el envio. Escribinos a: ".$destinatario." y te estaremos contactando a la brevedad</h4>";
                
            }
            
            
            ?>


</div>
</div>



</form>



<section class="headerdeptos">




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-80 img-fluid" src="/img/header.slider.1filtro.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-80 img-fluid" src="/img/header.slider.3.jpg" alt="Third slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-80 img-fluid" src="/img/header.slider.4filtro.jpg" alt="forth slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-80 img-fluid" src="/img/header.slider.2filtro.jpg" alt="Second slide">
  </div>
  
 </div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only"></span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only"></span>
</a>
</div>
         


</section>


  
  
  
  
  
  <section id="ubicacion" class="container-fluid row"> 
      <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-6">
        <h4>Ubicación</h4>
           
        <h3> Belgrano N° 188 - La Paz E.R. <br>
          En acceso al Puerto de la ciudad, a pocos metros del Rio Paraná.</h3>
          <h6> * Zona gastronómica <br>
          * 800 mts. de la Plaza principal <br>
          * 600 mts. Balneario (por costanera) <br>
          * 100 mts. Casino 

          </h6>
          
        
      </div>
  
      <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-6">
        <iframe class="ubicacionlg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1714.707507244661!2d-59.641166726628285!3d-30.734841948818307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b34dd7acda11c1%3A0x1d5e42ffc01247ce!2sLa%20Boya%20Departamentos!5e0!3m2!1ses!2sar!4v1641249420950!5m2!1ses!2sar" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <iframe class="ubicacionsm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1714.707507244661!2d-59.641166726628285!3d-30.734841948818307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b34dd7acda11c1%3A0x1d5e42ffc01247ce!2sLa%20Boya%20Departamentos!5e0!3m2!1ses!2sar!4v1641249420950!5m2!1ses!2sar" width="230" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    
       
  
    </section>


    <section id="ciudad">


      <div class="row">

        <div class="col-10 col-sm-5 col-md-5 col-lg-5 col-xl-5">
          <img class="img-fluid imgciudad"  src="/img/atardecer.jpg" alt="Card image cap">       
        </div>

      <div class="col-10 col-sm-5 col-md-5 col-lg-5 col-xl-5 justify-content-between">
        <div class="card-body">
          <h5 class="card-title">Nuestra ciudad</h5>
          <p class="card-text">Conocé los distintos atractivos que ofrece La Paz.   
             Entrá y enterate todo lo que podes hacer en nuestra ciudad.</p>
          <a href="https://www.lapazentrerios.tur.ar/que-hacer2/"><button class="btn btn-primary">¿ QUE HACER en La Paz E.R. ?</button></a>
        </div>
      </div>

      
    
    </div>

    </section>

  



    
    
    
    


                        
<!-- Footer    Footer    Footer  -->
                                                
<!-- Footer    Footer    Footer  -->
<!-- Footer    Footer    Footer  -->  
       
                   
    
<footer class="container-fluid footer">
    
  <div class="row">
        
    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                
        <h4 class="smnone">UBICACION</h4>
        <h5> <img src="/img/iconos/50pxubicacion.png" alt=""> </h5>
        <p>
           *Belgrano N° 188 - La Paz E.R. <br>
           
        </p>  
        

    </div>


  
    <div class="smnone col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="row iconosredes">

            <div class="col">
              <h4>@LABOYA.DEPARTAMENTOS</h4>
                <h5><img src="/img/iconos/50pxinstag.png" alt="Instagram"></h5>
            </div>
            
        </div>
    </div>

    <div class="col-12 justify-content-center">

      
      <figure class="logofooter">
      <h3>  <img src="img/laboyagris.yanone55.png" alt="logoboya"></h3>
      </figure>
      <div class="copyright">
        <p> &copy; Todos los derechos reservados </p>
      </div>
      
    </div>
    

</div>

<div class="facudevol">
  <a href=""> <p> &copy;FacuCalleja / DesarrolloWeb</p></a>
</div>



</footer>

                
            
            
            




        
</main>

    
   
    <!-- JavaScript Bundle with Popper -->

    <!-- JavaScript Bundle with Popper -->
<script src="/deptos.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



</body>
</html>

