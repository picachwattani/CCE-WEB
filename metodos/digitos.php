<html>
<head>
<link rel='stylesheet' href='../styles/style3.css'>	
    <title>Comprobar longitud de cc</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png" />
</head>
<body>

<div class="codigo">
    
    <?php 
    $cc = (int)$_POST['digitos'] ; 
    $cc_bin = $cc;
    $cc_ok = 1246546465464654;

    if(strlen($cc) == 16 ){
        $cc = strlen($cc);
        echo "<h1>La longitud de tu cc es correcta.</br> Tiene una longitud de: <spam>$cc</spam> digitos.</h1>" ;

    } else{
        $cc = strlen($cc);
        echo "<h1>La longitud de tu CC es incorrecta.</br> Tiene una longitud de: <spam>$cc</spam> digitos.</br></h1> 
        <h2>La longitud correcta de una CC es de 16 digitos.</h2></br>";}?>

        <h1>Tu CC es:  <spam> <?php echo $cc_bin?> </spam> </h1>

        <h2>Mas informacion sobre los metodos <a href="">aqui</a></h2>
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

