//! 20220524  

http://localhost:8080/codigo_qr/
http://localhost:8080/codigo_qr/index_decode.php

/*----- ----- ----- ----- */
/*//!   index_code.php      */
/*----- ----- ----- ----- */

primera pista 

https://www.jose-aguilar.com/blog/generar-codigos-qr-php/

1.- Se instalo esta libreria en htdocs/codigo_qr 

//! ;extension=php_gd  se desomentarizo en php.ini 

http://sourceforge.net/apps/mediawiki/phpqrcode/index.php?title=Main_Page

2.- Se definio el  index_code.php 

3.- La variable $contenido contiene el string a codificar

*----- ----- ----- ----- */
/*//!   index_dedode.html     */
/*----- ----- ----- ----- */

1.- De esta pagina se instalo

https://reeteshghimire.com.np/category/javascript/

2.- Se creo el 

html5-qrcode.min.js 

3. Se creo el 

index_decode.html 

4.- Se consulto para pasar la variable de javascript a php

https://www.estrellateyarde.org/manual-de-javascript/manual-de-javascript-pasar-variables-desde-javascript-a-php-y-viceversa#:~:text=Podemos%20hacerlo%20empleando%20el%20m%C3%A9todo,mediante%20el%20objeto%20%24_POST%20.

5.- Para combinar html5 javascript php debe ser el archivo .php

*----- ----- ----- ----- */
/*//!action_page.html     */
/*----- ----- ----- ----- */

1.- Para mostrar el contenido decodificado me base en 

https://www.youtube.com/watch?v=s1fDc8Ijjmk

*----- ----- ----- ----- */
/*//!Enviar datos a la misma pagina PHP    */
/*----- ----- ----- ----- */

1.- El archivo que contiene el codigo debe tener la extension .php 

2.- <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        .... codigo ....

        <input type="submit" value="Calcular" name="enviar">
</form>

3.- <?php 
    if(isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $promedio = ($nota1 + $nota2 ) / 2;
        echo  "<p>{$nombre}, tu promedio es : {$promedio}</p>";

    }

?>