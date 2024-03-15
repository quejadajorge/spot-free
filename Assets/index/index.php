

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/cartas.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>SPOT-FREE</title>
    <link rel="icon" href="../SPOT-FREE/SPOT-FREE-6.png">
</head>

    <style>
        .formulary input{
            border: 2px solid rgb(0, 15, 146);
            border-radius: 5px;
            padding: 3px 1.5px;
        }

        .formulary input:hover{
            background-color: rgb(240, 240, 240);
        }

        .formulary{
            text-align: center;
        }

        .formulary label{
            position: fixed;
            left: 44%;
        }
    </style>

<body>
    <header>
        <img class="logo" src="../IMAGENES PRUEBA/SPOT-FREE-4.png" alt="Logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="">Inicio</a></li>
                <li><a href="#footer">Nosotros</a></li>
                <li><a href="#" onclick="window.alert('Inicia sesion para poder realizar una reserva.')" type="buttom">Reservas</a></li>
                <li><a href="#footer">Contacto</a></li>
                <a class="ov-btn-slide-right" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Iniciar sesión</a>
            </ul>
        </nav>
    </header>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalToggleLabel">Iniciar sesión</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formulary" action="../php/verificacion.php" method="POST">
                    

                    <strong><label for="">Correo:</label></strong><br>
                    <input type="email" name="correo" placeholder="Ingresa tu correo">
                    <br><br>
                    <strong><label for="">Contraseña:</label></strong><br>
                    <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
            </div>
            <div class="modal-footer">
                <input class="btn btn-primary" type="submit" value="Ingresar" name="btningresar">
              </form>
              <button class="btn btn-outline-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Registrate</button>
            </div>
          </div> 
        </div>
      </div>
      <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalToggleLabel2">Registrate</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formulary" action="../php/guardar.php" method="POST">
                    <label for="">Nombre</label><br>
                    <input type="text" name="nombres" placeholder="Ingresa tu nombre">
                    <br><br>
                    <label for="">Apellido</label><br>
                    <input type="text" name="apellidos" placeholder="Ingresa tu apellido">
                    <br><br>
                    <label for="">Correo</label><br>
                    <input type="email" name="correo" placeholder="Ingresa tu correo">
                    <br><br>
                    <label for="">Telefono</label><br>
                    <input type="number" name="telefono" placeholder="Ingresa tu telefono">
                    <br><br>
                    <label for="">Contraseña</label><br>
                    <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
                
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Registrar">
              </form>
              <button class="btn btn-outline-secondary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Ya tengo cuenta</button>
            </div>
          </div>
        </div> 
      </div>

    
    
    <section>
        <div class="carusel">
            
        <div class="slide">
            <video id="video1" autoplay muted playsinline class="vid">
                <source src="../Video/RESERVA.mp4" type="video/mp4">
                </video>
        </div>
        <div class="slide">
        <img src="../imagenes/imagen2-carrusel.jpg" alt="Imagen 2">
        <div class="fondo-slide">
            <h1><strong>RESERVA TU CANCHA AL INSTANTE</strong></h1>
            <h3>Explora las canchas disponibles de la ciudad</h3>
        </div>
        </div>
        <div class="slide">
        <img src="../imagenes/imagen3-carrusel.jpg" alt="Imagen 3">
        <div class="fondo-slide">
            <h1><strong>RESERVA TU CANCHA AL INSTANTE</strong></h1>
            <h3>Explora las canchas disponibles de la ciudad</h3>
        </div>
        </div>
        <div class="slide">
            <video id="video1" autoplay muted playsinline class="vid">
            <source src="../Video/WhatsApp Video 2023-09-04 at 2.15.36 PM.mp4" type="video/mp4">
            </video>
            <div class="fondo-slide">
                <h1><strong>RESERVA TU CANCHA AL INSTANTE</strong></h1>
                <h3>Explora las canchas disponibles de la ciudad</h3>
            </div>
        </div>
        <button class="prev-button"><i class="bi bi-arrow-bar-left"></i></button>
        <button class="next-button"><i class="bi bi-arrow-bar-right"></i></button>
    
    </div>
</div>


    <p class="p-sec">Bienvenido a nuestro software de alquiler de escenarios deportivos.</p>
</section>

<section class="sec-2">
    <div class="text">
        <h1><strong>Tecnologia al servicio del deporte en Cartagena</strong></h1>
        <h4>Reserva canchas disponibles en la ciudad de Cartagena en tiempo real.</h4><br>
        <div>
            
            <a href="../php/tabla.php" class="ov-btn-slide-left">VER DISPONIBILIDAD</a>
            <div class="img-anim">
                <img src="../imagenes/sinfondo.png" alt="">
            </div>
        </div>
        </div>

        <p class="sec-p">Visualiza un poco sobre los diferentes escenarios deportivos de la ciudad</p>
    </section>

        <div class="card">
            <div class="face front">
                <img src="../imagenes/sintetica-blas-de-lezojpg.jpg" alt="">
                <h3>Cancha Blas de Lezo</h3>
            </div>
            <div class="face back">
                <h3>Escenario 1</h3>
                <p>Ubicacion: Blas de lezo</p>
                <p>Tarifa: $100.000</p>
                <p>Horario: 6:00am - 9:00pm</p>
                <div class="link">
                    <a href="#">Mas Informacion</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="../imagenes/Cancha-San-Fernando.jpg" alt="">
                <h3>Cancha - San Fernando</h3>
            </div>
            <div class="face back">
                <h3>Escenario 2</h3>
                <p>Ubicacion: San Fernando</p>
                <p>Tarifa: $110.000</p>
                <p>Horario: 6:00am - 12:00pm</p>
                <div class="link">
                    <a href="#">Mas Informacion</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="../imagenes/Cancha-Los-Calamares.jpg" alt="">
                <h3>Cancha - Los Calamares</h3>
            </div>
            <div class="face back">
                <h3>Escenario 3</h3>
                <p>Ubicacion: Calamares</p>
                <p>Tarifa: $90.000</p>
                <p>Horario: 6:00am - 10:00pm</p>
                <div class="link">
                    <a href="#">Mas Informacion</a>
                </div>
            </div>
        </div>





    <!--::::Pie de Pagina::::::-->
    <div class="pie-pagina">
    <footer id="footer" class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="../SPOT-FREE/SPOT-FREE-8.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Te mostramos los beneficios de tener un canal online para gestionar tu club que permite a los usuarios reservar online.</p>
            <p>Dejanos tus datos de contacto así podemos ponernos en contacto contigo.</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-threads"></i></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Spot Free</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../java/script.js"></script>
</body>
</html>