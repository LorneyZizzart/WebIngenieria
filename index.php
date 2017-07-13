<?php
  if (isset($_GET['modo'])) {
    if ($_GET['modo']=="ingresar") {
      if (isset($_POST['datos'])) {
        include 'model/consultas.php';
        include 'model/class.conexion.php';
        include 'model/usuario.php';
        include 'controller/ctrLogin.php';
        $con = new Conexion();
        $datUsuario = new Usuarios($_POST['usermane'], $_POST['password']);
        $manage = new ManagerLogin($con);
        $manage->Autentificaion($datUsuario);
      }else {
        echo "No ha llenado el formulario";
      }
    }else {
      include 'view/headerIn.php';
      include 'view/slider.php';
      include 'view/bodyIn.php';
      include 'view/footerIn.php';
    }
  }else {
    include 'view/headerIn.php';
    include 'view/slider.php';
    include 'view/bodyIn.php';
    include 'view/footerIn.php';
  }

?>
