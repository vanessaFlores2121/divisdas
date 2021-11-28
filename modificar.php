<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <meta name="viewport" content = "width-device-width, initial-scale=1.0">
    <title>Document Nuevo registro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head> 
<body>

                <?php
                        $id = $_GET['id_transaccion'];
                        $criptomoneda = $_GET['criptomoneda'];
                        $transaccion = $_GET['transaccion'];
                        $cantidad_cripto = $_GET['cantidad_cripto'];
                        $cambio_dolar = $_GET['cambio_dolar'];

                        $compra_venta_dolar= $_GET['compra_venta_dolar'];
                        $comision = $_GET['comision'];
                        $valoreal = $_GET['valoreal'];
                ?>

    <div>
      <center>  <form action="#" method="post">
            <table border="5">
            <tr>
                    <td>Ingresar Datos:</td>
                    <td><input type="text" name="id_transaccion" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                    <tr>
                        <td>criptomoneda</td>
                        <td><input type="text" name="criptomoneda" id="" value="<?=$criptomoneda?>"></td>
                    </tr>
                    <tr>
                        <td>transaccion:</td>
                        <td><input type="text" name="transaccion" id="" value="<?=$transaccion?>"></td>
                    </tr>
                    <tr>
                        <td>cantidad_cripto:</td>
                        <td><input type="text" name="cantidad_cripto" id="" value="<?=$cantidad_cripto?>"></td>
                    </tr>
                    <tr>
                        <td>cambio_dolar:</td>
                        <td><input type="text" name="cambio_dolar" id="" value="<?=$cambio_dolar?>"></td>
                    </tr>
                    <tr>
                        <td>compra_venta_dolar:</td>
                        <td><input type="text" name="compra_venta_dolar" id="" value="<?=$compra_venta_dolar?>"></td>
                    </tr>
                    <tr>
                        <td>comision:</td>
                        <td><input type="text" name="comision" id="" value="<?=$comision?>"></td>
                    </tr>
                    <tr>
                        <td>valoreal:</td>
                        <td><input type="text" name="valoreal" id="" value="<?=$valoreal?>"></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="Calcular" name="btnCalcularEditar"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Actualizar"></td>
                    </tr>
                    <tr>
                        <td><a href="alta_divisa.php">Cancelar</a></td>
                        <td><a href="index.php">Regresar al Inicio</a></td>
                    </tr>
                </table></center>

        </form> 
</div>
</body>
                        <?php
                                //GUARDA INFORMACION A LA BASE DE DATOS.

                                                $id = $_POST['id_transaccion'];
                                                $criptomoneda = $_POST['criptomoneda'];
                                                $transaccion = $_POST['transaccion'];
                                                $cantidad_cripto = $_POST['cantidad_cripto'];
                                                $cambio_dolar = $_POST['cambio_dolar'];
                                                $compra_venta_dolar= $_POST['compra_venta_dolar'];
                                                $comision =$_POST['comision'];
                                                $valoreal = $_POST['valoreal'];
                                                                        
                                                $conex = mysqli_connect("localhost","root","","criptomonedas"); 
                                                $consulta = "INSERT INTO criptomoneda(criptomoneda,transaccion,cantidad_cripto,cambio_dolar,compra_venta_dolar,comision,valoreal) VALUES ('$id','$criptomoneda','$transaccion','$cantidad_cripto',$cambio_dolar,$compra_venta_dolar,$comision,$valoreal)";
                                                $resultado = mysqli_query($conex,$consulta);
                                                
                                                
                                                if(!$resultado){
                                                        echo "No se inserto!";
                                                }else{
                                                        //header("Location: alta_divisa.php");
                                                }
                                          
                                ?>
</html>