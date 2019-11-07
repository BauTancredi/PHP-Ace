<?php 
include_once("Form.php");

class SingUpForm extends Form {
  protected $fullname;
  protected $email;
  protected $password;
  protected $avatar;

  public function __construct() {
    $this->fullname = isset($_POST["fullname"]) ? trim($_POST["fullname"]) : "";
    $this->email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $this->password = isset($_POST["password"]) ? trim($_POST["password"]) : "";
    $this->avatar = isset($_POST["avatar"]) ? $_FILES["avatar"] : null;
  }

  public function procesarFormulario() {
    var_dump('SignUp procesado');exit;
  }

  public function validar(){
    $errores = [];
    $fullname = $this -> fullname; 
    $email = $this -> email; 
    $password = $this -> password; 
    $avatar = $this -> avatar; 

    if(empty($fullname)){
      $errores["fullname"] = "¿Cómo te llamás?";
    }
    if(empty($email)){
      $errores["email"] = "¿Cual es tu correo?";
    }
    if(empty($password)){
      $errores["password"] = "No te olvides de completar tu password.";
    }
    if(!file_exists($_FILES["avatar"]["tmp_name"])){
      $errores["avatar"] = "Elegí una foto de perfil."; 
    }
    
    return $errores;
  }

  public function getFullname() {
    return $this->fullname;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPasssword() {
    return $this->password;
  }

  public function getAvatar() {
    return $this->avatar;
  }

}
?>