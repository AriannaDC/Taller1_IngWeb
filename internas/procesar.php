<?php

//enlace a la base de datos
$conect=new mysqli("127.0.0.1","root","","taller1_ingweb");

//if($conect){
  //  echo "se conecto a la db";
//}else{
  //  echo "error en la db";
//}

//extract($_POST);
//echo @$nombres." | ".$edad."<br>";

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];

$sql="insert into usuarios values('', '$nombres','$apellidos','$correo','$tipoUser')";
$resSql=mysqli_query($conect, $sql);
if(!$resSql){
    echo "error de sentencia";
}else{
    echo "se ejecuto correctamente";
}

echo $nombres." ".$apellidos." ".$correo." ".$tipoUser;

?>