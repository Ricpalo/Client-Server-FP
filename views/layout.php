<?php 
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)){
        $inicio = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="src/css/app.css">
        <title>Bienes Raíces Contacto</title>
    </head>
    <body>
        <header class="header <?php echo $inicio ? 'inicio' : '';?>">  
            <div class="contenedor contenido-header">
                <div class="barra">
                    <a href="/home">
                        <img src="src/img/logo.svg" alt="Imagen Logo">
                    </a>

                    <div class="mobile-menu">
                        <img src="src/img/barras.svg" alt="Icono Menu Responsive">
                    </div>

                    <div class="derecha">
                        <img src="src/img/dark-mode.svg" class="dark-mode-boton"></img>

                        <nav data-cy="navegacion-header" class="navegacion">
                            <a href="/nosotros">Nosotros</a>
                            <a href="/propiedades">Propiedades</a>
                            <a href="/blog">Blog</a>
                            <a href="/contacto">Contacto</a>
                            <?php if($auth){ ?>
                                <a href="/logout">Cerrar Sesión</a>
                            <?php }?>
                        </nav>
                    </div>
                </div>

                <?php echo $inicio ? '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>' : ''; ?>

            </div>
        </header>

        <?php echo $content; ?>

        <footer class="footer seccion">
            <div class="contenedor contenedor-footer">
                <nav data-cy="navegacion-footer" class="navegacion">
                    <a href="/nosotros">Nosotros</a>
                    <a href="/propiedades">Propiedades</a>
                    <a href="/blog">Blog</a>
                    <a href="/contacto">Contacto</a>
                </nav>
            </div>

            <p class="copyright">Todos los Derechos Reservados <?php echo date('Y');?> &copy;</p>
        </footer>

        <script src="src/js/app.js"></script>
        <script src="src/js/modernizr.js"></script>
    </body>
</html>