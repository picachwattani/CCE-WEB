<html>
<head>
    <link rel='stylesheet' href='../styles/style3.css'>	
    <title>Comprobar longitud de cc</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="codigo">
        <div class="titulo">
            <h1>CREDIT CARD EXTRAPOLATOR WEB</h1>
            <img src="../images/LOGO2.png" alt="logo de cce">
        </div>

            <?php 
            $cc = (int)$_POST['digitos'] ; 
            $cc_bien = $cc;
            $cc_bin = $cc;
            $cc_ok = 1246546465464654;?>



        <div class="respuesta">
         <?php 
            if(strlen($cc) == 16 ){
                $cc = strlen($cc);
                echo "<h1>La longitud de tu cc es <spam> correcta.</spam></br> La longitud es de: <spam>$cc</spam> digitos.</h1>" ;

            } else{
                $cc = strlen($cc);
                echo "<h1>La longitud de tu CC es<spam> incorrecta.</spam></br> La longitud es de: <spam>$cc</spam> digitos.</br></h1> 

                 <h3>La longitud correcta de una CC es de 16 digitos.</h3>";}?> </spam></h1>
        </div> 

        <div class="respuesta">
            <h1>Tu CC es: </br> <spam><?php echo $cc_bien?> </spam></h1>    
        </div>
        <div class="informacion">
            <h2>Mas información sobre </br> los metodos <a target="_blank"
                href="https://credit-card-extrapolator.github.io/CCE/metodos.html">aquí</a></h2>    
        </div>
            <div class="botones">
                <div class="form">
                    <a  href = "../index.php">Inicio</a                
                  </div>
                <div class="form">
                    <a  target='_blank' href ="https://namso-gen.com/">Ir a namso</a             
                  </div>  
            </div>
    </div> 
</body>
</html>

