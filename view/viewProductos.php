<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="view/hojaEstilo.css">
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Nombre del artículo
                </td>
            </tr>
        <?php
            require_once ("controller/controllerProductos.php");
            foreach ($matrizProductos as $registro){
                echo "<tr><td>".$registro['NOMBRE']."</td></tr>";
            }
        ?>
        </table>
    </body>
</html>