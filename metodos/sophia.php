<html>
<head>
<link rel='stylesheet' href='../styles/style3.css'>	
    <title>Metodo Sofia</title>
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

        <div class="respuesta">
            <h1>Tu CC extrapolada con el metodo Sofia es:  </br><spam> <?php echo $cc_bin?> </spam></h1>
        </div> 

        <div class="respuesta">
            <h1>Tu CC sin extrapolar es: </br> <spam><?php echo $cc?> </spam></h1>    
        </div>
        <div class="informacion">
            <h2>Mas información sobre </br> los metodos <a target="_blank" href="https://credit-card-extrapolator.github.io/CCE/metodos.html">aquí</a></h2>    
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


