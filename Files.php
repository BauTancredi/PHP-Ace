<?php
 
abstract  class Files {
  public static $UPLOAD_DIR = "uploads/";

  public static function upload($file) {
    // Obtengo la extensión del archivo
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    // Obtengo el archivo temporal
    $tempFile = $file['tmp_name'];
    // Armo el nombre de la imagen
    $finalName = uniqid('img_') . '.' . $ext;
    // Destino final (NO OLVIDAR DAR LOS PERMISOS A LA CARPETA EN NUESTRO D.D.)
    $filePath = Files::$UPLOAD_DIR . $finalName;

    move_uploaded_file($tempFile, $filePath);

    return $filePath;
  }
}
 