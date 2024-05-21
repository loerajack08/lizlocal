<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>fechas disponibles</title>

    <style>
      body {
        background-color: #87ccc1;
        margin: 0;
        padding: 0;
      }
      h1 {
        text-align: center;
        width: 50%;
        margin: auto;
        margin-top: 30px;
      }
      table {
        border: 3px solid #cca633;
        padding: 20px 50px;
        margin-top: 20px;
        border-radius: 5px;
        background-color: #edf797;
      }
    </style>
  </head>
  <!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
  <h2>Iniciar sesión</h2>
  <form method="POST" action="fechasdisporegistro.php">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario"><br><br>
      <label for="contraseña">Contraseña:</label>
      <input type="password" id="contraseña" name="contraseña"><br><br>
      <button type="submit" name="submit">Iniciar sesión</button>
      <button type="reset" name="reset">Reset</button>
  </form>
</body>
</html>
