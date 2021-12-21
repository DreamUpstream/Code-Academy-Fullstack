<?php

$source = "https://randomuser.me/api/?format=csv";
  
$data = file_get_contents($source);
   
$myfile = fopen("blabla.csv", "w");
  
fwrite($myfile, $data);
  
fclose($myfile);
  
?>