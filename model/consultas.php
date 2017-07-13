<?php


class ConsultasBasicas
{

  public function getUsuarioDB($usuario, $conexion)
  {
    $consulta = $conexion->prepare('SELECT * FROM usuarios WHERE user = :usuario');
    $consulta->bindParam(':usuario', $usuario);
    $consulta->execute();
    $registro = $consulta->fetch();
    return $registro;
  }

}


?>
