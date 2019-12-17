<?php

require "vendor/autoload.php";
$usu1 = new Usuario("sebas","alejandromena185@gmail.com", "145745");
$usu2 = new Usuario("ale",",menaalejandro31@gmail.com","12345");

/* echo $usu1->getmail();
  $usu1->setmail('alej123@gmail.com');
 echo "<br>";
  echo $usu1->getmail();
    echo "<pre>";
  $usu1->saludar();
*/
 $usu1->encriptarPass();

?>