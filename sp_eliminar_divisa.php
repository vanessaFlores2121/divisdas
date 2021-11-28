<?php
$id = $_GET['id'];

$conex = mysqli_connect("localhost","root","","criptomonedas"); 
$consulta = "DELETE  FROM divisas where id like $id";
$resultado = mysqli_query($conex,$consulta);

if(!$resultado){
    echo "No se Elimino!";
}else{
    header("Location: alta_divisa.php");
}
?>