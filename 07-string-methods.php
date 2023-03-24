<?php include 'includes/header.php';



$nombre ="Juan perez";

//CONOCER LA EXTENSION DE UN STRING
 echo strlen($nombre);
 echo var_dump($nombre);
 //Eliminar espacios en blanco
 $texto =trim($nombre);
 echo $texto;
 //Convertir a Mayusculas
 echo strtoupper($nombre);
 //Convertir a Minusculas
 echo strtolower($nombre);

include 'includes/footer.php';