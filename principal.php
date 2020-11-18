<?php 

 include('assets/data/conexion.php');

 $obj = new Conexion;

 $res = $obj->buscarProducto();

 $temp = array();

 $temp = $res;

    print("Id Produto:" . $temp[0]['id_producto'] . '<br>');
    print("Nombre:" . $temp[0]['nombre_producto'] . '<br>');
    print("Precio Venta:" . $temp[0]['precio_venta'] . '<br>');
    print("<img src=" . $temp[0]['url_img'] . ' width="150">');

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../mitienda - copia/assets/css/">
    <script src="https://kit.fontawesome.com/9d6315ac3e.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iphone Wordl</title>
    <link rel="stylesheet" href="../mitienda - copia/assets/css/index.css">
    <link rel="stylesheet" href="../mitienda - copia/assets/css/normalize.css">
    <link rel="stylesheet" href="../mitienda - copia/assets/css/Productos.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="site-header inicio" style="height: 150px;">
        <div class="contenedor">
            <div class="barra-img">
                <div class="barra">
                    <img src="../mitienda - copia/assets/img/logo/logo.JPG" height="78" width="200" alt="" style="border-radius: 50%;">


                    <nav class="navegacion">
                        <a href="Accesorios.html">Accesorios</a>
                        <a href="productos.html">Productos</a>
                        <a href="Metodosdepago.html">Metodos de pago</a>
                        <a href="Blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>

            </div>


        </div>

        </div>
    </header>


    <section class="contenedor-seccion">
        <h2 class="fw-300 centrar-texto" style=" font-family: serif;"> Explora nuestros nuevos diseños </h2>

        <div class="iconos-nosotros" style="max-width: max-content;">
            <div class="icono">
                <div class="img"><img src="../mitienda - copia/assets/img/productos-iphone/!phone11promax.png" width="225px" height="225px"></div>
                <p class="parrafo1"><?php echo $temp[0]['nombre_producto'];?></p>
                <p class="parrafo1"><?php echo $temp[0]['precio_venta'];?></p>
                <a href="!Phone_11_Pro_Max.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
                <div class="img"><img src="../mitienda - copia/assets/img/productos-iphone/iphone-xr-yellow.png" width="225px" height="225px"></div>
                <p class="parrafo1">iPhone XR</p>
                <p class="parrafo1">$15,449.00</p>
                <a href="!Phone_XR.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            <div class="icono">
                <div class="img"><img src="../mitienda - copia/assets/img/productos-iphone/iphone xs max.png" width="225px" height="225px"></div>
                <p class="parrafo1">iPhone XS Max</p>
                <p class="parrafo1">$22,249.00</p>
                <a href="!Phone_XS_Max.html" class="boton">Ver Producto</a>
            </div>
        </div>

        <br>
        <br>
    </section>


    <footer class="fondo">
        <p>Copyrigth &copy; 2019 IPHONEWORDL | Todos los derechos reservados</p>
    </footer>

</body>

</html>