<html>
<head>
    <link rel='stylesheet' href='../styles/style3.css'>	
    <title>Metodo Similitud</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png" />
</head>
<body>
    
</body>
</html>
<div class="codigo">
<?php 
    $cc = (int)$_POST['cc_similitud'] ; 
    $cc2 = (int)$_POST['cc_similitud2'] ; 
    $cc_bin = substr($cc, 0, 6);
    $cc_m1 = substr($cc, 6, 16);
    $cc_m2 = substr($cc2, 6, 16);

    for($i=0;$i<strlen($cc_m1);$i++){
        if ($cc_m1[$i] == $cc_m2[$i]){
            $cc_bin .= $cc_m1[$i];}
        else {
            $cc_bin .= "x";}}; ?>

        <h1>Tu CC extrapolada con </br> el metodo Similitud es:</br>  <spam> <?php echo $cc_bin?> </spam></br> 
        </br>
        <h2>Por favor copiala antes</br> de volver o ir a Namso </h2>
        <h1>Tu CC sin extrapolar es:</br>  <spam><?php echo $cc?> </spam></h1>

        <h2>Mas información </br>sobre los metodos <a href="https://credit-card-extrapolator.github.io/CCE/metodos.html">aquí</a></h2> 
        <div class="botones">
            <form action="../index.php" method="post">
                <button >Inicio</button>
            </form>    
            <form target='_blank' action="https://namso-gen.com/">
                <button>Ir a Namso</button>
            </form>
        </div>

</div>

