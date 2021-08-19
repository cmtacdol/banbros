<?php 

function imageUpload($directory,$file){

  $structure = '../../uploads/images/'.$directory.'/';
  $databasepath = 'uploads/images'.$directory.'/';

  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $mimetype = finfo_file($finfo, $file['tmp_name']);
  if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif' || $mimetype == 'image/png') {
  
  if (!file_exists($structure)) {
    if (!mkdir($structure, 0777, true)) {
    
    }else{
      move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
      return $databasepath.$file["name"];
    }
  
    }else{
      move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
      return $databasepath.$file["name"];
    }
  } else {
  echo 'The source file type ' . $mimetype . ' is not supported';
  die();
  }

}
?>