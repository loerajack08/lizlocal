<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>crear cita</title>

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
  <body>
    <h1>Formulario de registro</h1>
    <form action="registro3.php" name="" method="POST">
      <table border="0" align="center">
        <tr>
          <td>
            Nombre y Apellido:
          </td>
          <td>
            <label for="name"></label>
            <input type="text" name="nombre" id="name" required  />
          </td>
        </tr>
        <tr>
          <td>
            Nombre de Usuario:
          </td>
          <td>
            <label for="user"></label>
            <input type="text" name="usuario" id="user" required  />
          </td>
        </tr>
        <tr>
          <td>
            Contraseña:
          </td>
          <td>
            <label for="password"></label>
            <input type="password" name="contraseña" id="password"  required />
          </td>
        </tr>
        <!--<tr>
          <td>
            Repetir contraseña:
          </td>
          <td>
            <label for="rep_pasword"></label>
            <input type="pasword" name="rep_contraseña" id="rep_pasword"  required />
          </td>
        </tr>-->
        <tr>
          <td>
            fecha de la cita :
          </td>
          <td>
            <label for="fechacita"></label>
            <input type="date" name="fechacita" id="fechacita" required  />
          </td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <input
              type="submit"
              name="enviar"
              id="enviar"
              value="Registrarse"
            />
          </td>
          <td align="center">
            <input type="reset" name="borrar" id="borrar" value="Restablecer" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>