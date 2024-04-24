<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlazar el archivo de estilos CSS -->
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <title>Inicio</title>
</head>
<body>
    <header class="contenedor" >
        
        <div class="btn-menu">
              <label for="btn-menu" class="btn-menu-arriba">☰</label>  
		</div>

        <a href="#" class="logo">
            <img class="logo_img" src="img/logo_generico.jpg" alt="logo">
            <h2 class="logo_nombre"> Nombre Generico</h2>
        </a>
        <nav class="contenedor_nav" itemscope itemtype="">
            <ul class="contenedor_ul_izquierda">
                <li itemprop="name"><a class="contenedor_ul_a" href="#" itemprop="url">Inicio</a></li>
                <li itemprop="name"><a class="contenedor_ul_a" href="#" itemprop="url">Servicio</a></li>
                <li itemprop="name"><a class="contenedor_ul_a" href="#" itemprop="url">Nosotros</a></li>
                <li itemprop="name"><a class="contenedor_ul_a" href="#" itemprop="url">Contacto</a></li>              
            </ul>
            <ul class="contenedor_ul_derecha">
                <li itemprop="name"><a class="contenedor_ul_a_derecha" href="#" itemprop="url">LOGIN</a></li>
                <li> <img class="imagen_loguin" src="#" alt="Imagen de la secion"></li>
            </ul>
        </nav>
    </header>

    <div class="contenedor_general">

        <aside class="contenedor_barra_latera">
            <header>
                <div class="btn-menu">
                    <label for="btn-menu" class="btn-menu-abajo">☰</label>  
		        </div>
            </header>
            
            <nav>
                <ul class="menu_Ul">
                    <li>
                        <a href="#">
                        <button class="boton_menu boton_categoria active"><i class="bi bi-house-fill"></i>Inicio</button>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <button class="boton_menu boton_categoria active"> <i class="bi bi-book-fill"></i>Libros</button>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <button class="boton_menu boton_categoria active"><i class="bi bi-"></i>Buscar libro+</button>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <button class="boton_menu boton_categoria active"><i class="bi bi-"></i></button>
                        </a>Contacto
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="contenedor_main">
            <H1>titulo PRINCIPAL</H1>
        </main>
    </div>
    
    <!-- BARRA LATERAL -->
    
    
</body>
</html>