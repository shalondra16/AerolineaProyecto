<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Eliminado</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fddde6, #d4e6f1);
            color: #333;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #555;
        }

        .message {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #666;
        }

        .btn {
            background: linear-gradient(145deg, #b0e0e6, #afeeee);
            border: none;
            color: #333;
            padding: 15px 30px;
            font-size: 1rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 9px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .btn:hover {
            background: linear-gradient(145deg, #afeeee, #b0e0e6);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <?php 
    $cod = $_POST['cavion'];
    include "conexion.php";

    $consulta = "DELETE FROM avion WHERE avi_codigo='$cod'";
    $resultado = mysqli_query($conec, $consulta);

    if ($resultado) {
        echo "<h1>Registro Eliminado</h1>";
    } else {
        echo "<h1>Error, Registro NO Eliminado</h1>";
    }
    ?>
    <a href="consulta_general.html" class="btn">Volver al Inicio</a>
</div>

</body>
</html>