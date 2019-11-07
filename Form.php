<?php 

abstract class Form{
  public abstract function validar();
  public abstract function procesarFormulario();

  public function enviar(){
    $errores = $this -> validar();
    $success = count($errores) == 0;
    
    if($success) {
      $this -> procesarFormulario();
    }

    return $errores;
  }
}