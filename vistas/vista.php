<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <title>OroGold</title>
    <?php
    $rutaDefinitiva=rutaStatica::ctrRuta();
    ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $rutaDefinitiva ?>vistas/css/style.css">
        

</head>
<body>

  <header class="site-header section">
            <div class="contenedor-barra">
            <div class="contenedor barra">
                <div class="logo">
                    <img src="<?php echo $rutaDefinitiva ?>vistas/img/cropped-orogold-logo-dgold.png" alt="david">
                </div>

                <nav id="navegacion" class="navegacion">
                    <a class="m-r" href="#">orogoldspa@orogold.com</a>
                    <a class="boton" href="#">Reserva ahora</a>
                </nav>
                <nav class="hamburgesa">
                  <i class="fas fa-bars"></i>
                </nav>
            </div>
           </div>
           <div class="datos-encabezado">
           <div class="contenedor">
            <div class="caja_encabezado visible">
            <h1 class="titulo">orogold</h1>
            <p class="subtitulo">Cuando belleza y glamour es parte tuya ven y conocenos <span>van de la mano</span></p>
            </div>
            <div class="caja_encabezado">
             <form class="contenedor-form" id="formulario">
              <p id="error"></p>
              <p class="mensaje-reserva">Reserva ahora tu cita</p>
              <input type="text" placeholder="Nombre" class="input" id="nombre"> 
              <input type="text" placeholder="Email" class="input" id="email"> 
              <input type="password" placeholder="Password" class="input" id="contrasena"> 
              <input type="submit" value="Reservar ahora" class="button completo"> 
             </form>
            </div>
            </div>
          </div>
            </header>
    </header>
    
    <section class="section">
        <div class="contenedor">
            <div class="contenedor-secundario m-b">
            <?php
            $encabezados=ProductosControlador::encabezado("tratamiento");
            echo '
              <h2 class="titular">'.$encabezados['titulo'].'</h2>
              <p class="centrado letra-clara size-2">'.$encabezados['subtitulo'].'</p>
            ';
            ?>
            </div>
            <div class="tratamientos">
            <?php
            $datos=ProductosControlador::imagenes();
            for ($i=0; $i <count($datos) ; $i++) { 
              echo '
              <div class="tarjeta">
              <img class="icono" src="'.$rutaDefinitiva.$datos[$i]['ruta'].'">
              <div class="info">
              <p class="info_titulo">'.$datos[$i]['titulo'].'</p>
              <p class="info_dato letra-clara">'.$datos[$i]['subtitulo'].'</p>
              </div>
              </div>
              ';
            }

            ?>

        </div>
        </div>
    </section>
    <section>
        <div class="somos">
        <div class="quienes_somos contenedor-secundario">
            <?php
            $encabezados=ProductosControlador::encabezado("quienes_somos");
            echo '
              <h2 class="titular-secundario mayucula">'.$encabezados['titulo'].'</h2>
              <p>'.$encabezados['subtitulo'].'</p>
            ';
            ?>
        </div>
        </div>
    </section>

    <div class="slider section">
    <ul>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1515377905703-c4788e51af15.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1520473378652-85d9c4aee6cf.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1560944527-a4a429848866.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/bg-principal.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/masaje.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1552693673-1bf958298935.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1553540751-988bd7918c7e.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1554057009-6798cb3d4a04.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1555820585-c5ae44394b79.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1559058922-5d29e1f00075.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1513104806186-1b00f3e7a65e.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1515377905703-c4788e51af15.jpg"></li>
      <li><img src="<?php echo $rutaDefinitiva ?>vistas/img/photo-1515377905703-c4788e51af15.jpg"></li>
    </ul>
    </div>


 
    
    

    <section class="section">
        <div class="contenedor ubicacion">
        
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.102909084202!2d-99.00782958578276!3d19.36469624786799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e2b6e9e08211%3A0x59552f8f36fee8e6!2sAcatitla!5e0!3m2!1ses!2smx!4v1588915654462!5m2!1ses!2smx" width="2000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
        <div class="datos">
            <div class="horarios">
                <h3 class="subtitulos">horarios</h3>
                <div class="dias">
                    <p>Lunes a viernes de 10:00 a 19:30</p>
                    <p>Sabados,domingos y festivos de 10:00 a 19:30</p>
                </div>
                <div class="mensaje">
                    <p>Puedes concertarte tratamientos fuera del horario de apertura indicando con cita precia</p>
                </div>
            </div>
            <div class="direccion">
                <h3 class="subtitulos">direccion</h3>
                <div class="dias">
                    <p>Av. Insurgentes Sur 105, Roma Sur, Cuauthemoc 0660 Ciudad de Mexico, CDMX Mexico</p>

                </div>
                
            </div>
            <div>
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.102909084202!2d-99.00782958578276!3d19.36469624786799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e2b6e9e08211%3A0x59552f8f36fee8e6!2sAcatitla!5e0!3m2!1ses!2smx!4v1588915654462!5m2!1ses!2smx" target="_blank" class="boton-map">Ver en Mapa</a>
           </div>
        </div>
        </div>
    </section>

    
    <section class="section">
     <div class="contenedor nuevo" id="anima-reserva">
      <?php
            $encabezados=ProductosControlador::encabezado("oportunidad");
            echo '
              <h2 class="titular">'.$encabezados['titulo'].'</h2>
              <p>'.$encabezados['subtitulo'].'</p>
            ';
        ?>
      <a href="#" class="button padding" id="reservaID">Reservar ahora</a>
     </div>
    </section>
    
    <footer>
    <div class="contenedor">
     <div class="logof">
     <img src="<?php echo $rutaDefinitiva ?>vistas/img/cropped-orogold-logo-dgold.png" alt="david">
     </div>
     <div class="redes">
      <ul>
       <li>
       <img src="<?php echo $rutaDefinitiva ?>vistas/icon/mail.png">
       <p>orogoldspa@orogold.com</p>
       </li>
       <li>
       <img src="<?php echo $rutaDefinitiva ?>vistas/icon/telephone.png">
       <p>55 52738252726</p>
       </li>
      </ul>
     </div>
    </div>
    
    </footer>

    <button class="boton-flotante" id="flotante">
      <i class="fas fa-arrows-alt"></i>
    </button>

    <div class="modal-contenedor" id="modal-contenedor">
      <div class="modal">
        <div class="logo-modal">
          <img src="<?php echo $rutaDefinitiva ?>vistas/img/cropped-orogold-logo-dgold.png" alt="david">
        </div>
        <div class="icono-modal">
          <i  class="" id="im"></i>
        </div>
        <div class="mensaje-modal">
          <p id="mensajeM"></p>
        </div>
        
      </div>
    </div>

<script src="<?php echo $rutaDefinitiva ?>vistas/js/script.js"></script>
</body>
</html>