<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
<?php
session_start(); // Iniciar la sesión si aún no se ha iniciado

//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";
$db = "bdformulario";
//base datos
$conexion = mysqli_connect($host, $user, $pass, $db);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre de usuario y la contraseña enviados por el formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    echo "Usuario recibido: " . $usuario . "<br>";
    echo "Contraseña recibida: " . $contraseña . "<br>";

    // Consulta SQL para verificar las credenciales
    $consulta = "SELECT * FROM tabla_we  WHERE usuarioR = '$usuario' AND contraseñaR = '$contraseña'";
    
    // Imprimir la consulta SQL para depuración
    echo "Consulta SQL: " . $consulta . "<br>";

    // Ejecutar la consulta solo si la conexión es válida
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si se encontró alguna fila que coincida con las credenciales
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        // Obtener los datos de la tabla después de que el usuario ha iniciado sesión con éxito
        $consulta_tabla = "SELECT * FROM tabla_form";
        $resultado_tabla = mysqli_query($conexion, $consulta_tabla);

        echo "<table>";
        echo "<tr>";
        echo "<th><h1>id</h1></th>";
        echo "<th><h1>Nombre</h1></th>";
        echo "<th><h1>Usuario</h1></th>";
        echo "<th><h1>Contraseña</h1></th>";
        echo "<th><h1>fechacita</h1></th>";
        echo "</tr>";

        while ($colum = mysqli_fetch_array($resultado_tabla)) {
            echo "<tr>";
            echo "<td><h2>" . $colum['id']. "</h2></td>";
            echo "<td><h2>" . $colum['nombre']. "</h2></td>";
            echo "<td><h2>" . $colum['usuario'] . "</h2></td>";
            echo "<td><h2>" . $colum['contraseña'] . "</h2></td>";
            echo "<td><h2>" . $colum['fechacita'] .  "</h2></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        // Si no se encontraron coincidencias, mostrar un mensaje de error
        echo "Usuario o contraseña incorrectos.";
    }
}

// Cerrar la conexión a la base de datos al final del script si ya no la necesitas
mysqli_close($conexion);
?>

<a href="index.php">Volver Atrás</a>
</body>
</html>
