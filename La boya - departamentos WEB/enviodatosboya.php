<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Boya - Departamentos</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<link rel="stylesheet" href="/laboyadeptos.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  
  <!-- Datapicker Jquery -->

<!-- ANIMATED.CSS -->
 


</head>


<body id="contenedorgeneral">


    <nav id="menugrande" class="container-fluid sticky-top navbarpadel">
       
        <ul class="nav justify-content-between align-content-center">
          
         
          <li class="nav-item dropdown">
            
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DEPARTAMENTOS</a>
            <div class="dropdown-menu rankingdrop">
              <a class="dropdown-item" href="/servicios.html#galeria">5/7 pax</a>
              <a class="dropdown-item" href="/servicios.html#galeria">5 pax</a>
              
              
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="servicios.html#nuestrosservicios">SERVICIOS</a>
            </li>
            
            <li class="nav-item">
                <figure class="animate__animated animate__backInDown logonav">
                   <a href="index.html"> <img  src="/img/laboyagris.yanone55.png" class="img-fluid logonav" alt="logopadel"></a>
                </figure>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#ubicacion">UBICACION</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#contacto">CONTACTO</a>
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
            
            
            
            <div class="col-4">
              
              
              <div class="hamburger">
                <div class="_layer -top"></div>
                  <div class="_layer -mid"></div>
                  <div class="_layer -bottom"></div>
                </div>
                <nav class="menuppal">
                    <ul>
                      <li><a href="servicios.html#galeria">DEPARTAMENTOS</a></li>
                      <li><a href="servicios.html#nuestrosservicios">SERVICIOS</a></li>
                      <li><a href="#contacto">CONTACTO</a></li>
                      <li><a href="#ubicacion">UBICACION</a>  <a class="m-3" href="/index.html"> / Inicio</a></li>
                      
                    </ul>
                  </nav>
                  </div> 
                  
              </div>
                  
          </div>
                 
           
       </nav>
        
       

            
        </div>
       
        

      
 
        

    
    <section class="headerdeptos">
      
      <div id="bienvenidos" >
      <h3 class="animate__animated animate__backInLeft"> Bienvenidos</h3>
      
      </div>
     
      <div class="headerarriba">
        

      </div>
        
  
   </section>

        
        
        
        
        <div class="container recibodatos">
            <div class="form w-75 echo">
                
                <?php
            
            
            //1) Definir los datos a enviar -> armar el array POST
            $nombre = $_POST['nombre'];
            $email =  $_POST['email'];
            $telefono = $_POST['telefono'];
            $fechadesde = $_POST['desde'];
            $fechahasta = $_POST['hasta'];
            $pax = $_POST['pax'];
            
            
            //2) Cargar los datos a enviar -> destino, asunto, mensaje
            $destinatario = "alesarubi@outlook.com";
            $asunto = "Nuevo mensaje del sitio WEB - La Boya";
            $cuerpomensaje = "Nombre:".$nombre."<br>Email:".$email."<br>Telefono:".$telefono."<br>Fechas interesadas:".$fechadesde."-".$fechahasta."<br>Pax:".$pax;
            
            
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




<section id="cardservicios">

  
<div class="container col-12">
  <div class="card">
      <div class="face face1">
          <div class="content">
              <img src="/img/iconos/50pxubicacion.png">
              <h3>Ubicación</h3>
          </div>
      </div>
      <div class="face face2">
          <div class="content">
              <p>En el acceso al puerto local, a solo 30mts. del Río Paraná  / Zona gastronómica</p>
                  <a href="#ubicacion">Ubicación</a>
          </div>
      </div>
  </div>
  <div class="card">
      <div class="face face1">
          <div class="content">
              <img src="/img/iconos/50pxseguridad.png">
              <h3>Seguridad</h3>
          </div>
      </div>
      <div class="face face2">
          <div class="content">
              <p>LUna de las zonas más seguras de la ciudad. A solo 50mts. de Prefectura.</p>
                  
          </div>
      </div>
  </div>
  <div class="card">
      <div class="face face1">
          <div class="content">
              <img src="/img/iconos/50pxwifi.png">
              <h3>WI-FI</h3>
          </div>
      </div>
      <div class="face face2">
          <div class="content">
              <p>Servicio de internet por Wifi </p>
          </div>
      </div>
  </div>
  <div class="card">
    <div class="face face1">
        <div class="content">
            <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
            <h3>Launch</h3>
        </div>
    </div>
    <div class="face face2">
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                <a href="#">Read More</a>
        </div>
    </div>
</div>



</div>



<div class="container cards2">
<div class="card">
    <div class="face face1">
        <div class="content">
            <img  src="/img/iconos/50pxaireac.png">
            <h3>A.C. / Calef.</h3>
        </div>
    </div>
    <div class="face face2">
        <div class="content">
            <p>Unidades climatizadas. Aire acondicionado y calefacción. Visitanos en cualquier epoca del año.</p>
               
        </div>
    </div>
</div>
<div class="card">
    <div class="face face1">
        <div class="content">
            <img src="/img/iconos/50pxropa-de-cama.png">
            <h3>Ropa de Cama</h3>
        </div>
    </div>
    <div class="face face2">
        <div class="content">
            <p>Cada departamento cuenta con ropa blanca. (Sabanas, Toallones, frazadas, etc).</p>
            
        </div>
    </div>
</div>
<div class="card">
    <div class="face face1">
        <div class="content">
            <img src="/img/iconos/50pxparrilla.png">
            <h3>Parrilla</h3>
        </div>
    </div>
    <div class="face face2">
        <div class="content">
            <p>Nuestra unidad de planta baja, cuenta con un amplio patio y asador privado </p> 
        </div>
    </div>
</div>
<div class="card">
  <div class="face face1">
      <div class="content">
          <img src="/img/iconos/50pxtv.png">
          <h3>TV con Cable</h3>
      </div>
  </div>
  <div class="face face2">
      <div class="content">
          <p>Unidades equipadas con TV pantalla plana. Servicio de cable.</p>
              
      </div>
  </div>
</div>



</div>


</section>





<!-- INICIO                CARD SERVICIOS SMALL / PARA CELULAR  -->
<!-- INICIO                CARD SERVICIOS SMALL / PARA CELULAR  -->
<!-- CARD SERVICIOS SMALL / PARA CELULAR  -->
<!-- CARD SERVICIOS SMALL / PARA CELULAR  --><!-- CARD SERVICIOS SMALL / PARA CELULAR  -->


<section id="cardservicioscelular">


<div class="container row">
<div class="card col-6">
<div class="face face1">
    <div class="content">
        <img src="/img/iconos/50pxubicacion.png">
        <h3>Ubicación</h3>
    </div>
</div>
<div class="face face2">
    <div class="content">
        <p>En el acceso al puerto local, a solo 30mts. del Río Paraná  / Zona gastronómica</p>
            <a href="#ubicacion">Ubicación</a>
    </div>
</div>
</div>
<div class="card col-6">
<div class="face face1">
    <div class="content">
        <img src="/img/iconos/50pxseguridad.png">
        <h3>Seguridad</h3>
    </div>
</div>
<div class="face face2">
    <div class="content">
        <p>LUna de las zonas más seguras de la ciudad. A solo 50mts. de Prefectura.</p>
            
    </div>
</div>
</div>
<div class="card col-6">
<div class="face face1">
    <div class="content">
        <img src="/img/iconos/50pxwifi.png">
        <h3>WI-FI</h3>
    </div>
</div>
<div class="face face2">
    <div class="content">
        <p>Servicio de internet por Wifi </p>
    </div>
</div>
</div>
<div class="card col-6">
<div class="face face1">
  <div class="content">
      <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
      <h3>Launch</h3>
  </div>
</div>
<div class="face face2">
  <div class="content">
      <p>Lorem ipsum dolor si cumque minus iste veritatis provident at.</p>
          
  </div>
</div>
</div>



</div>



<div class="container cards2 row">
<div class="card col-6">
<div class="face face1">
  <div class="content">
      <img  src="/img/iconos/50pxaireac.png">
      <h3>A.C. / Calef.</h3>
  </div>
</div>
<div class="face face2">
  <div class="content">
      <p>Unidades climatizadas. Aire acondicionado y calefacción. Visitanos en cualquier epoca del año.</p>
         
  </div>
</div>
</div>
<div class="card col-6">
<div class="face face1">
  <div class="content">
      <img src="/img/iconos/50pxropa-de-cama.png">
      <h3>Ropa de Cama</h3>
  </div>
</div>
<div class="face face2">
  <div class="content">
      <p>Cada departamento cuenta con ropa blanca. (Sabanas, Toallones, frazadas, etc).</p>
      
  </div>
</div>
</div>
<div class="card col-6">
<div class="face face1">
  <div class="content">
      <img src="/img/iconos/50pxparrilla.png">
      <h3>Parrilla</h3>
  </div>
</div>
<div class="face face2">
  <div class="content">
      <p>Nuestra unidad de planta baja, cuenta con un amplio patio y asador privado </p> 
  </div>
</div>
</div>
<div class="card col-6">
<div class="face face1">
<div class="content">
    <img src="/img/iconos/50pxtv.png">
    <h3>TV con Cable</h3>
</div>
</div>
<div class="face face2">
<div class="content">
    <p>Unidades equipadas con TV pantalla plana. Servicio de cable.</p>
        
</div>
</div>
</div>



</div>



</section>


<!--     FIN   FIN          CARD SERVICIOS SMALL  / PARA CELULAR  -->
<!--     FIN   FIN          CARD SERVICIOS SMALL  / PARA CELULAR  -->
<!--     FIN   FIN          CARD SERVICIOS SMALL  / PARA CELULAR  -->
<!--     FIN   FIN          CARD SERVICIOS SMALL  / PARA CELULAR  -->
<!--     FIN   FIN          CARD SERVICIOS SMALL  / PARA CELULAR  -->
<!--     FIN   FIN          CARD SERVICIOS SMALL  / PARA CELULAR  -->














<section class="headerhistoria">

<div class="arribahistoria">

<div id="historia" class="animate__animated">

<h4>Departamentos con mucha historia. <br> Completamente renovados para recibirte en cualquier epoca del año</h5>


</div>


</div>

</section>





<!-- GALERIA DE IMAGENES           NORMAL   -->
<!-- GALERIA DE IMAGENES          NORMAL   -->
<!-- GALERIA DE IMAGENES             NORMAL  -->

<section id="galeriabuena">


<div class="containergaleria">
<h1 class="text-center">Nuestros departamentos</h1>

<div class="gallery-wrap">
<div class="item item-1"></div>
<div class="item item-2"></div>
<div class="item item-3"></div>
<div class="item item-4"></div>
<div class="item item-5"></div>
</div>
</div>






</section>

<!-- GALERIA DE IMAGENES -->
<!-- GALERIA DE IMAGENES -->






<!-- GALERIA DE IMAGENES           SMALL CELULARRR   -->
<!-- GALERIA DE IMAGENES           SMALL CELULARRR   -->
<!-- GALERIA DE IMAGENES            SMALL CELULARRR  -->












<section id="ubicacion" class="container-fluid row"> 
<div id="animarubicacion" class="animate__animated col-12 col-md-5 col-sm-5 col-lg-6 col-xl-6">
<h4>Ubicación</h4>
   
<h3> Belgrano N° 188 - La Paz E.R. <br>
  En acceso al Puerto de la ciudad, a pocos metros del Rio Paraná.</h3>
  <h6> * Zona gastronómica <br>
  * 800 mts. de la Plaza principal <br>
  * 600 mts. Balneario (por costanera) <br>
  * 100 mts. Casino 

  </h6>
  

</div>

<div class="col-12 col-md-7 col-sm-7 col-lg-6 col-xl-6">
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
  <a target="_blank" href="https://www.lapazentrerios.tur.ar/que-hacer2/"><button class="btn btn-primary">¿ QUE HACER en La Paz E.R. ?</button></a>
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
<a href=""> <p> &copy;FC-DEVWEB / DesarrolloWeb</p></a>
</div>



</footer>

        
    
    
    





</main>



<!-- JavaScript Bundle with Popper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->


<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>     --> 

<!--ANIMACINO DE TEXTO-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<script src="/deptosboya.js"></script>



</body>
</html>
