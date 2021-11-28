<?php
$id = $_POST['id'];
$divisa = $_POST['divisa'];
$cantidad_cripto = $_POST['cantidad_cripto'];
$moneda = $_POST['moneda'];
$valor = $_POST['valor'];

$conex = mysqli_connect("localhost","root","","criptomonedas"); 
$consulta = "UPDATE divisas set divisa = '$divisa', cantidad_cripto='$cantidad_cripto',moneda='$moneda',valor='$valor' where id like $id";
$resultado = mysqli_query($conex,$consulta);

if(!$resultado){
    echo "No se Actualizo!";
}else{
    header("Location: alta_divisa.php");
}
?>