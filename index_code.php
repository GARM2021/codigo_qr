<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Codigo QR Generado</h1>
    <br>
    <br>
    <br>
    <?php
    //! Este genara el QR en base a la variable $contenido
    // comprobar si tenemos los parametros w1 y w2 en la URL

    if (isset($_POST["ttexto"])) {
        //asignar w1 y w2 a dos variables
        $phpVar1 = $_POST["ttexto"];

        //  mostrar $phpVar1 y $phpVar2
        // echo "<p>Parameters: " . $phpVar1 . " </p>";
    } else {
        echo "<p>No parameters</p>";
    }


    ////////////////////////////////////////////////////
    require 'phpqrcode/qrlib.php';

    $dir = 'temp/';

    if (!file_exists($dir))
        mkdir($dir);

    $filename = $dir . 'test.png';

    $tamanio = 10;
    $lavel = 'M';
    $frameSize = 3;
    $contenido = $phpVar1;

    QRcode::png($contenido, $filename, $lavel, $tamanio, $frameSize);

    // echo '<img src="'.$filename.'" />';


    ?>

    <br>
    <br>
    <br>

    <div>
     

        <p style="font-size:160%;">
            <?php
            if (isset($filename)) {
                echo '<img src="'.$filename.'" />';
            }
            ?>
        </p>
<br>
<br>    
<br>

        <p style="font-size:160%;">
            <?php
            if (isset($contenido)) {
                echo $contenido;
            }
            ?>
        </p>
    </div>

</body>

</html>