<?php
extract($_POST);
echo @$nombres." | ".$edad."<br>";

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];

if($edad<18){
    echo"Ud es menor de edad";
}elseif($edad>65){
    echo"Ud es adulto mayor";
}else{
    echo"Ud es mayor de edad";
}

?>