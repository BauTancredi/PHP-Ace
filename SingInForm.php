<?php 
include_once("Form.php");

class SingInForm extends Form {
  protected $email;
  protected $password;
 
  public function __construct() {
    $this->email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $this->password = isset($_POST["password"]) ? trim($_POST["password"]) : "";
  }

  public function procesarFormulario() {
    var_dump('SignUp procesado');exit;
  }

  public function validar() {
    $errores = [];
    $email = $this->email;
    $password = $this->password;
 
    if (empty($password)) {
      $errores["password"] = "No te olvides de completar tu contraseña";
    }
 
    if (empty($email)) {
      $errores["email"] = "¿Cuál es tu correo?";
    }
 
    return $errores;
  }

  public function getEmail() {
    return $this->email;
  }
}