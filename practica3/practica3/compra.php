<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <!-- CSS -->
    <link rel="stylesheet" href="main.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/874e7dd252.js" crossorigin="anonymous"></script>
    <!-- ANIMATE -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <?php
        $n1=filter_input(INPUT_POST, 'n1');
        $n2=filter_input(INPUT_POST, 'n2');
        $n3=filter_input(INPUT_POST, 'n3');
        $billete=filter_input(INPUT_POST, 'billete');
        $suma=($n1+$n2+$n3);
        $total=($billete-$suma);
        
    ?>

    <h1>Tienda <i
            class="animate__animated animate__bounce animate__infinite	infinite animate__slow fas fa-shopping-basket"></i></i>
    </h1>

    <div class="ticket">
        <div class="content">
            <h3>Ticket</h3>
            <b>Primer producto: $
                <?php
            
            echo $n1;
            ?>
            </b>

            <b>Segundo producto: $
                <?php
            
            echo $n2;
            ?>
            </b>

            <b>Tercer producto: $
                <?php
            
            echo $n3;
            ?>
            </b>

            <b>Billete: $
                <?php
            
            echo $billete;
            ?>
            </b>
            <b>Total de la compra: $
                <?php
            
            echo $suma;
            ?>
            </b>

            <b>Tu cambio es $
                <?php 
        
            echo $total;
            ?>
            </b>
            <br>
            <br>
            <b>Gracias por tu compra.</b>
        </div>

        <img src="shop.svg" alt="">
    </div>

    <footer>
        <p>Página hecha con <i class="fas fa-heart"></i>&<i class="fas fa-coffee"></i> por Alejandro Soto Aguirre ©2020
            | 5°G | <a href="https://github.com/Achellx/LaTienda.git"><i class="fab fa-github"></i></a></p>
    </footer>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>

</body>

</html>