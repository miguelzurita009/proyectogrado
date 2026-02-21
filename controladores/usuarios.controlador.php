<?php

class ControladorUsuarios
{

  static public function ctrIngresoUsuario()
  {

    if (isset($_POST["ingEmail"])) {

      if (
        filter_var($_POST["ingEmail"], FILTER_VALIDATE_EMAIL) &&
        !empty($_POST["ingPassword"])
      ) {

        $tabla = "usuarios";
        $item = "email";
        $valor = $_POST["ingEmail"];

        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

        // Si no existe el usuario
        if (!$respuesta) {
          echo '<br><div class="alert alert-danger">El correo no existe</div>';
          return;
        }

        // Validar password
        //if (password_verify($_POST["ingPassword"], $respuesta["password"]))
        if ($_POST["ingPassword"] === $respuesta["password"]) { //para password no hasheado

          $_SESSION["iniciarSesion"] = "ok";
          $_SESSION["email"] = $respuesta["email"];

          echo '<script>
                    window.location = "inicio";
                </script>';
        } else {

          echo '<br><div class="alert alert-danger">Contraseña incorrecta</div>';
        }
      } else {

        echo '<br><div class="alert alert-danger">Datos inválidos</div>';
      }
    }
  }
}
