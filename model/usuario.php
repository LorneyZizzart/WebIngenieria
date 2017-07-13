<?php

  class Usuarios
  {

    private $IdUsuario;
    private $TipoUsario;
    private $IdPersonal;
    private $Usuario;
    private $Email;
    private $Contrasena;
    private $Estado;

    function __construct($usuario, $contrasena)
    {
      $this->Usuario = $usuario;
      $this->Contrasena = $contrasena;
    }

    public function getIdUsuario(){ return $this->IdUsuario; }
    public function getTipoUsuario(){ return $this->TipoUsario; }
    public function getIdPersonal(){ return $this->IdPersonal; }
    public function getUsuario(){ return $this->Usuario; }
    public function getEmail(){ return $this->Email; }
    public function getContrasena(){ return $this->Contrasena; }
    public function getEstado(){ return $this->Estado; }

    public function setIdUsuario($value){ $this->IdUsuario = $value; }
    public function setTipoUsuario($value){ $this->TipoUsario = $value; }
    public function setIdPersonal($value){ $this->IdPersonal = $value; }
    public function setUsuario($value){ $this->Usuario = $value; }
    public function setEmail($value){ $this->Email = $value; }
    public function setContrasena($value){ $this->Contrasena = $value; }
    public function setEstado($value){ $this->Estado = $value; }

  }


?>
