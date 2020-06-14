<?php

 

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
);
   define('LOGIN','toto');   
  define('PASSWORD',' 12345678');  
 
 
 
  if($_POST))
  {
     
    if $_POST['login']))
    {
      $message = 'taper votre login  !';
    } 
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'taper votre mot de passe svp !';
    }
       
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'le mot de passe ou le login est incorrect  !';
    }
       
      elseif($_POST['motDePasse'] !== PASSWORD)
    {
      $message = ' 'le mot de passe ou le login est incorrect  !';';
    }
      else
    {
      
      $message = 'la connection  à était faite avec succès  '. LOGIN .' !';
    }