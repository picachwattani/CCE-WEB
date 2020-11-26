<html>
<head>
<link rel='stylesheet' href='../styles/style3.css'>	
    <title>Metodo Activación</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png" />
</head>
<body>
    <div class="codigo">
        <?php 
        $cc =  (int)$_POST['cc_activacion'];  
        $cc_ok = substr($cc, 0, 10);
        $cc_ok .= "xxxxxx";?>

    
        <h1>Tu CC extrapolada con </br>el metodo Activación es: </br> <spam> <?php echo $cc_ok?> </spam></br> </h1>
        </br>
        <h2> Por favor copiala antes</br> de volver o ir a Namso </h2>
        <h1>Tu CC sin extrapolar es: </br> <spam><?php echo $cc?> </spam></h1>

        <h2>Mas información </br> sobre los metodos <a href="https://credit-card-extrapolator.github.io/CCE/metodos.html">aquí</a></h2>
        <div class="botones">
            <form action="../index.php" method="post">
                <button >Inicio</button>
            </form>    
            <form target='_blank' action="https://namso-gen.com/">
                <button>Ir a Namso</button>
            </form>
        </div>
    </div>    
</body>
</html>
