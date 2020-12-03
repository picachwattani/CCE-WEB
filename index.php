
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="styles/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>CCE WEB</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-8025537612057421" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <header>
        <div class="titulo">
            <img src="images/LOGO2.png" alt="Logo">
            <h1><spam>CREDIT CARD EXTRAPOLATOR WEB</spam></h1>
            <h3>Elige un metodo de extrapolación</h3>
        </div>
        <div class="opciones">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="submit" name="basico" value="Basico"><br>
                <input type="submit" name="similitud" value="Similitud"></input>
                <input type="submit" name="identacion" value="Identación"></input>
                <input type="submit" name="activacion" value="Activación" ></input>
                <input type="submit" name="sophia" value="Sofia"></input>
                <input type="submit" name="digitos" value="N.Digitos"></input>
            </form> 
        </div>
    </header>
 
    </br>
    </br>
        <?php include 'metodos.php'?>  
    </br>
    </br>

    <footer>
        <div class="redes">
            <div class="social-te" ><a target="_blank" href="https://t.me/sobrehacking"> <i class="fab fa-telegram"></i></a></div>
            <div class="social" ><a target="_blank" href="https://credit-card-extrapolator.github.io/CCE/index.html"><i class="fas fa-globe-americas"></i></a></div>
            <div class="social" ><a target="_blank" href="https://www.youtube.com/channel/UCfzu-cvx2iPLjc95PdbVlbw?view_as=subscriber"><i class="fab fa-youtube"></i></a></div>
            <div class="social" ><a target="_blank" href="https://github.com/credit-card-extrapolator/CCE-WEB"><i class="fab fa-github"></i></a></div>
            <div class="social" ><a target="_blank" href="https://credit-card-extrapolator.github.io/CCE/index.html#acerca_de"><i class="fas fa-info-circle"></i></a></div>
        </div>
        <div class="descargar">
            <a target="_blank" href="https://credit-card-extrapolator.github.io/CCE/index.html">Descargar para pc</a>
        </div>
        <div class="donate">
        <a target="_blank" href="Donaciones/index.html">Donar</a>
        </div>
    </footer>
</body>
</html>


