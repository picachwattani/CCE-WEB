<html>
<head>
<link rel='stylesheet' href='../styles/style3.css'>	
    <title>Metodo Sofia</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png" />
</head>
<body>
    <div class="codigo">
            <?php 
        $cc = (int)$_POST['cc_sophia'] ; 
        $cc_bin1 = substr($cc,8,16);
        $cc2 = (int)$_POST['cc_sophia2'] ;  
        $cc_bin = substr($cc, 0, 8);
        $cc_m1 = substr($cc2, 8,16);

        $cc_re = $cc_m1[0] * $cc_bin[0];
        $cc_re .= $cc_m1[1] * $cc_bin[1];
        $cc_re .= $cc_m1[2] * $cc_bin[2];
        $cc_re .= $cc_m1[3] * $cc_bin[3];
        $cc_re .= $cc_m1[4] * $cc_bin[4];
        $cc_re .= $cc_m1[5] * $cc_bin[5];
        $cc_re .= $cc_m1[6] * $cc_bin[6];
        $cc_re .= $cc_m1[7] * $cc_bin[7];

        function replaceAt($cc_bin, $i, $replace){
            return substr_replace($cc_bin,$replace,$i,1); };  


        for($i=0;$i<strlen($cc_bin1);$i++){
            if ($cc_bin1[$i] == $cc_re[$i]){
                $cc_bin .= $cc_re[$i];}
            else {
                $cc_bin .= "x";}}; 

        if($cc_bin[15] == "x"){
            $cc_bin = replaceAt($cc_bin,15,"1");}?>

        <h1>Tu CC extrapolada con</br> el metodo Sofia es:</br></br>   <spam> <?php echo $cc_bin?> </spam></br> </br> </h1>
        <h2>Por favor copiala antes de volver o ir a Namso</h2> 
        <h1>Tus CCs sin extrapolar son:</br>  <spam><?php echo $cc?> </br> <?php echo $cc2?> </spam></h1>

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


