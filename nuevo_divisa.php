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
    <center><div>
        <form action="#" method="post">
            <table border="5">
                <tr>
                    <tr>Ingresar Datos Criptomonedas:</td><br<><br>
                </tr>
                <tr>
                    <td>DIVISA</td>
                    <td><input type="text" name="divisa" id=""></td>
                </tr>
                <tr>
                     <td>CANTIDAD CRIPTOMONEDAS:</td>
                    <td><input type="text" name="cantidad_cripto" id=""></td>
                </tr>
                <tr>
                     <td>MONEDA:</td>
                    <td><input type="text" name="moneda" id=""></td>
                </tr>
                <tr>
                     <!--<td>VALOR:</td>
                    <td><input type="text" name="valor" id=""></td>-->
                </tr>
                <tr>
                     <td><input type="submit" value="calcular" name="btncalcular"></td>
                
                </tr>
                <tr>
                    
                    <td><input type="submit" value="Guardar" name="btnguardar"></td>
                </tr>
                <tr>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form> 
</div>
                <!--REGISTRAR-->
            <a href="index.php"> Regresar al Inicio</a></center>

             <!--Aqui iniciamos a realizar validacion de criptomonedas-->
             
</body>

<?php
                                
             if(isset($_POST['btncalcular']))
             {
                echo "<br>";
                        echo 'Ingresaste al boton';

                        $divisa = trim($_POST['divisa']);
                        $cantidad_cripto = trim($_POST['cantidad_cripto']);
                        $moneda = trim($_POST['moneda']);

                        
                            
                        //Comparacion de campos llenos
                        if($_POST['divisa'] == '' or $_POST['cantidad_cripto'] == '' or $_POST['moneda'] == '')
                        {//Divisas llenas
                            echo "<br>";
                            echo 'campos llenados';
                        }
                        else{

                        
                                
                                if($divisa == 'bitcoin' or $divisa == 'ethereum' or $divisa == 'neo' or $divisa == 'candano' or $divisa == 'dogecoin')
                                {//5 monedas registradas solamente.
                                    echo "<br>";
                                    echo 'Criptomoneda Permitidas (bitcoin,ethereum,neo,candano,dogecoin)';
                                
                    
                                    if($moneda == 'MEX' or $moneda == 'EUR' or $moneda == 'USD' or $moneda == 'YEN' or $moneda == 'CAD')
                                    {//Validacion tipo de moneda.
                                        echo "<br>";
                                        echo 'Moneda Correcta Permitida (MEX,EUR,USD,YEN,CAD)';
                                    
                                    

                                    
                                                if($divisa == 'bitcoin' or $divisa == 'BITCOIN')
                                                {
                                                        //Conversiones Monedas
                                                        $MEX_Bit=1276538.32;
                                                        $USD_Bit=58833.70;
                                                        $EUR_Bit=52437.89;
                                                        $YEN_Bit=6764139.90;
                                                        $CAN_Bit =74703.38;

                                                       

                                                        //tipo de moneda validacion
                                                        
                                                                //Inicia comparacion de monedas
                                                                if($moneda == 'MEX' or $moneda == 'mex')
                                                                {
                                                                    
                                                                    $valor_bit=$cantidad_cripto * $MEX_Bit;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }
                                                            
                                                                if($moneda == 'USD' or $moneda == 'usd')
                                                                {
                                                                    $valor_bit = $cantidad_cripto * $USD_Bit;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }
                                                                if($moneda == 'EUR' or $moneda == 'eur')
                                                                {
                                                                    $valor_bit = $cantidad_cripto * $EUR_Bit;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }
                                                                if($moneda == 'YEN' or $moneda == 'yen')
                                                                {
                                                                    $valor_bit=$cantidad_cripto*$YEN_Bit;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }
                                                                if($moneda == 'CAD' or $moneda == 'cad')
                                                                {
                                                                    $valor_bit = $cantidad_cripto*$CAN_Bit;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }//termina comparacion de monedas 
                                                
                                                    }//BITCOIN

                                                             if($divisa == 'ethereum' or $divisa == 'ETHEREUM')
                                                            {
                                                                //Conversiones Monedas
                                                                $MEX_ETH=97878.03;
                                                                $USD_ETH=4504.93;
                                                                $EUR_ETH=4015.69;
                                                                $YEN_ETH=517726.83;
                                                                $CAN_ETH=5712.97;

                                                                //Calculo Moneda
                                                                if($moneda == 'MEX' or $moneda == 'mex')
                                                                {
                                                                    $valor_bit=$cantidad_cripto * $MEX_ETH;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                    
                                                                }
                                                                if($moneda == 'USD' or $moneda == 'usd')
                                                                {
                                                                    $valor_bit = $cantidad_cripto * $USD_ETH;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }
                                                                if($moneda == 'EUR' or $moneda == 'eur')
                                                                {
                                                                    $valor_bit=$cantidad_cripto * $EUR_ETH;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }
                                                                if($moneda == 'YEN' or $moneda == 'yen')
                                                                {
                                                                    $valor_bit=$cantidad_cripto*$YEN_ETH;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }
                                                                if($moneda == 'CAD' or $moneda == 'cad')
                                                                {
                                                                    $valor_bit=$cantidad_cripto*$CAN_ETH;
                                                                    $valor =  $valor_bit;
                                                                    echo "<br>";
                                                                    echo' El Valor es $', $valor;
                                                                }


                                                            }
                                                            if($divisa == 'neo' or $divisa == 'NEO')
                                                            {
                                                                //Conversiones Monedas
                                                                $MEX_NEO=887.35;
                                                                $USD_NEO=40.84;
                                                                $EUR_NEO=36.41;
                                                                $YEN_NEO=4693.34;
                                                                $CAN_NEO=51.79;

                                                                    //Calculo Moneda
                                                                    if($moneda == 'MEX' or $moneda == 'mex')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto * $MEX_NEO;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'USD' or $moneda == 'usd')
                                                                    {
                                                                        $valor_bit = $cantidad_cripto * $USD_NEO;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'EUR' or $moneda == 'eur')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto * $EUR_NEO;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'YEN' or $moneda == 'yen')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto * $YEN_NEO;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'CAD' or $moneda == 'cad')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto*$CAN_NEO;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                            }
                                                            if($divisa == 'candano' or $divisa == 'CANDANO')
                                                            {
                                                                $MEX_CAN=36.34;
                                                                $USD_CAN=1.67;
                                                                $EUR_CAN=1.49;
                                                                $YEN_CAN=191.58;
                                                                $CAN_CAN=2.12;

                                                                    //Calculo Moneda
                                                                    if($moneda == 'MEX' or $moneda == 'mex')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto * $MEX_CAN;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'USD' or $moneda == 'usd')
                                                                    {
                                                                        $valor_bit = $cantidad_cripto * $USD_CAN;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'EUR' or $moneda == 'eur')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto * $EUR_CAN;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'YEN' or $moneda == 'yen')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto*$YEN_CAN;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'CAD' or $moneda == 'cad')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto*$CAN_CAN;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                
                                                            }
                                                            if($divisa == 'dogecoin' or $divisa == 'DOGECOIN')
                                                            {
                                                                $MEX_DOG=4.77;
                                                                $USD_DOG=0.22;
                                                                $EUR_DOG=0.20;
                                                                $YEN_DOG=25.26;
                                                                $CAN_DOG=0.28;

                                                                    //Calculo Moneda
                                                                    if($moneda == 'MEX' or $moneda == 'mex')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto * $MEX_DOG;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'USD' or $moneda == 'usd')
                                                                    {
                                                                        $valor_bit = $cantidad_cripto * $USD_DOG;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'EUR' or $moneda == 'eur')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto * $EUR_DOG;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'YEN' or $moneda == 'yen')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto*$YEN_DOG;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                    if($moneda == 'CAD' or $moneda == 'cad')
                                                                    {
                                                                        $valor_bit=$cantidad_cripto*$CAN_DOG;
                                                                        $valor =  $valor_bit;
                                                                        echo "<br>";
                                                                        echo' El Valor es $', $valor;
                                                                    }
                                                                }

                                        }//MONEDAS
                                        else{
                                            echo "<br>";
                                            echo'moneda incorrecta Permitidas(MEX,EUR,USD,YEN,CAD)';
                                        }
                                    
                                }
                                else{
                                    echo "<br>";
                                    echo'criptomoneda incorrecta  (bitcoin,ethereum,neo,candano,dogecoin)';
                                }
                                                   
                                 
                            
                        }

                        //GUARDA INFORMACION A LA BASE DE DATOS.
                             $id = $_POST['id'];
                            $divisa = $_POST['divisa'];
                            $cantidad_cripto = $_POST['cantidad_cripto'];
                            $moneda = $_POST['moneda'];
                                                     
                            $conex = mysqli_connect("localhost","root","","criptomonedas"); 
                            $consulta = "INSERT INTO divisas(divisa,cantidad_cripto,moneda,valor) VALUES ('$divisa','$cantidad_cripto','$moneda','$valor')";
                            $resultado = mysqli_query($conex,$consulta);
                            
                            
                            if(!$resultado){
                                echo "No se inserto!";
                            }else{
                                header("Location: alta_divisa.php");
                            }
                                                             
                 }  //Boton 
                     

            ?>
        
            <!--Cerraremos la validacion de criptomonedas-->
</html>