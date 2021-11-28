<?php
$id = $_POST['id'];
$divisa = $_POST['divisa'];
$cantidad_cripto = $_POST['cantidad_cripto'];
$moneda = $_POST['moneda'];
$valor = $_POST['valor'];


$conex = mysqli_connect("localhost","root","","criptomonedas"); 
$consulta = "INSERT INTO divisas(divisa,cantidad_cripto,moneda,valor) VALUES ('$divisa','$cantidad_cripto','$moneda','$valor')";
$resultado = mysqli_query($conex,$consulta);


if(!$resultado){
    echo "No se inserto!";
}else{
    header("Location: alta_divisa.php");
}
?>