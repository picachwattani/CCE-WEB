<html>
<head>
    <link rel='stylesheet' href='../styles/style3.css'>	
    <title>Metodo Identación</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png" />
</head>
<body>
<div class="codigo">
            <?php 
        $cc = (int)$_POST['cc_identacion'] ;  
        $cc_bin = substr($cc, 0, 6);
        $cc_m = substr($cc, 6, 16);
        $cc_m2 = substr($cc_m, 0,3);
        $cc_m3 = substr($cc_m, 3,2);
        $cc_m4 = substr($cc_m, 6);
        $replace = 'x';  
        $replace2 = "xx";


        function replaceAt($cc_m2, $i, $replace){
            return substr_replace($cc_m2,$replace,$i,1); };  


        $cc_bin .=  replaceAt($cc_m2,1,$replace). replaceAt($cc_m3,1,$replace2). replaceAt($cc_m4,2,$replace)  ;?>

        <h1>Tu CC extrapolada con</br> el metodo Identación es:</br>  <spam> <?php echo $cc_bin?> </spam></br></h1>
        </br> 
        <h2>Por favor copiala antes de volver o ir a Namso </h2>
        <h1>Tu CC sin extrapolar es:</br>  <spam><?php echo $cc?> </spam></h1>

            <h2>Mas información sobre los metodos <a href="https://credit-card-extrapolator.github.io/CCE/metodos.html">aquí</a></h2>
            <div class="botones">
                <form action="../index.php" method="post">
                    <button >Inicio</button>
                </form>    
                <form target='_blank' action="https://namso-gen.com/">
                    <button >Ir a Namso</button>
                </form>
            </div>
</div>
</body>
</html>


