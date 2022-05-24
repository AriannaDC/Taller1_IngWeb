<?php
$var1=1;
$var2=2;
$edad=25;
$vres=0;
echo "hola mundo 1 ;) <br>";
echo "hola mundo 2 ;) <br>";

echo "hola mundo 3 ;) <br>";

if($edad>=19){
    echo "Usted es mayor de edad";
}else{
    echo "Usted es menor de edad <br>";
}

for($i=0; $i <15; $i++){
    $ope=5*$i;
    echo "5 * " .$i." = " .$ope."<br>"; 
}
?>