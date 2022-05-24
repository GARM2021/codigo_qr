//! Este genara el QR en base a la variable $contenido

<?php
require 'phpqrcode/qrlib.php';

$dir = 'temp/';

if(!file_exists($dir))
    mkdir($dir);

$filename = $dir.'test.png';

$tamanio = 10;
$lavel = 'M';
$frameSize = 3;
$contenido = 'Hola Mundo';

QRcode::png($contenido, $filename, $lavel, $tamanio, $frameSize);

echo '<img src="'.$filename.'" />';

?>