<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSRF Tester</title>
</head>
<body>
        <?php
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            echo "\n[+] Listando el contenido de la url " . $url . ":\n\n";
            // Utiliza funciones como file_get_contents para leer el contenido de la URL
            include($url);
            // echo $content;
        } else {
            echo "<h2>SSRF Tester</h2>";
            echo "<p>Ingresa la URL que deseas probar:</p>";

            echo "<p> Esto es colocando en la URL de la siguiente manera </p>";
            echo "<p> <strong> http://<ip>/utility.php?url=http://example.com </strong> </p>";
            echo "<div>\n[!] No se ha proporcionado ningún valor para el parámetro URL</div>";
            echo "<p> <strong> http://<ip>/utility.php?url=# </strong> </p>";
        }
        ?>
</body>
</html>

