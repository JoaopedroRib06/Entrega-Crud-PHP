<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="empresa";

$result= mysqli_connect($servidor,$usuario,$senha,$bd);
if($result){
    echo "Conectado";
}else{
    echo mysqli_error($result);
}

?>