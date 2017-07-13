<?php

	class ManagerLogin
	{

		private $ConexionDB;

		function __construct($conexion)
		{
			$this->ConexionDB = $conexion;
		}

		public function Autentificaion($usuario)
		{
			$consultUsuario = new ConsultasBasicas();
			$datosUser = $consultUsuario->getUsuarioDB($usuario->getUsuario(), $this->ConexionDB);
			if ($datosUser['estado']==1) {
				if ($datosUser['password']==$usuario->getContrasena()) {
					$this->IdentificaionUsuario($datosUser);
				}else {
					header("Location: ContrasenaIncorrecta.php");
				}
			}else {
				header("Location: noEstaHabilitado.php");
			}
		}

		public function IdentificaionUsuario($datosUser)
		{
			if ($datosUser['idTipoUsuario']==1) {
				header("Location: view/menuAdmin.php");
			}else {
				if ($datosUser['idTipoUsuario']==2) {

				}
			}
		}

	}

?>
