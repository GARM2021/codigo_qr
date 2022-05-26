<!-- ! Este decodifica   -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <script src="html5-qrcode.min.js"></script>
    <style>
        .result {
            background-color: green;
            color: #fff;
            padding: 20px;
        }

        .row {
            display: flex;
        }
    </style>
    <div class="row">
        <div class="col">
            <div style="width:500px;" id="reader"></div>
        </div>
        <div class="col" style="padding:30px;">
            <h4>SCAN RESULT</h4>
            <div id="result">Result Here</div>
        </div>
    </div>

    <div class="row">
        <form action="/codigo_qr/action_page.php" method="post">
            <!-- <label for="Tscanresultado">Resultado Scan:</label> -->
            <input type="hidden" id="Tscanresultado" name="scanresultado" value=" "  >
            <input type="submit" value="Registra">
        </form>

    </div>


    <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            document.getElementById('result').innerHTML = '<span class="result">' + qrCodeMessage + '</span>';
            // window.location.href = window.location.href + "?w1=" + qrCodeMessage;
            document.getElementById('Tscanresultado').value = qrCodeMessage;
        }

        function onScanError(errorMessage) {
            //handle scan error
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>

    <!-- <?php
    // comprobar si tenemos los parametros w1 y w2 en la URL
    // if (isset($_GET["w1"])) {
        // asignar w1 y w2 a dos variables
        // $phpVar1 = $_GET["w1"];

        // mostrar $phpVar1 y $phpVar2
        // echo "<p>Parameters: " . $phpVar1 . " </p>";
    // } else {
        // echo "<p>No parameters</p>";
    // }

    ?> -->


</body>

</html>