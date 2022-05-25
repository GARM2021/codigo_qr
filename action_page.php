
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Page</title>
</head>

<body>
    <div class="row">
        <div class="col">
            <h2> Este es el texto decodificado </h2>
            <h2> Y que fue capturado en  codigo_qr </h2>
        </div>
    </div>


</body>


<?php
// comprobar si tenemos los parametros w1 y w2 en la URL
if (isset($_POST["scanresultado"])) {
    //    asignar w1 y w2 a dos variables
    $phpVar1 = $_POST["scanresultado"];
} else {
    echo "<p>No parameters</p>";
}

?>

<form action="/codigo_qr/action_page.php" method="post">
    <input type="text" name="txtmendaje2" value="<?php echo $phpVar1; ?>" >
</form>

<!-- <script type="text/javascript">
    function ResultadoScan () {

        document.getElementById('Tscanresultado').value   = <?php echo $phpVar1; ?>;      

    }
</script> -->

<!-- </html> -->