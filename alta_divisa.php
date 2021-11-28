<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <meta name="viewport" content = "width-device-width, initial-scale=1.0">
    <title>Document Modificacion</title>
        <link rel="stylesheet" href="css/estilo.css">
        
</head> 
<body>
<center><div>
        <form action="buscar_divisa.php" method="post"><br><br>
            <h1>Busca por criptomoneda o moneda</h1>
            <input type = "text" name="buscar" id=""><br><br>
            <input type = "submit" value="buscar"><br><br>

            <a href = "nuevo_divisa.php">NUEVO</a>
        </form>
    </div>

    <div>
        <table border ="12">
            <tr>
                <td>ID</td>
                <td>Divisas</td>
                <td>Cantidad Criptomoneda</td>
                <td>Moneda</td>
                <td>Valor</td>
            </tr>

            
           



            <?php

            $conex = mysqli_connect("localhost","root","","criptomonedas"); 
            $consulta = "SELECT id, divisa, cantidad_cripto, moneda, valor  FROM divisas order by id desc";
            $resultado = mysqli_query($conex,$consulta);
            while ($mostrar = mysqli_fetch_row($resultado))
            {
                ?>
                <tr>
                    <td><?php echo $mostrar ['0'] ?> </td>
                    <td><?php echo $mostrar ['1'] ?> </td>
                    <td><?php echo $mostrar ['2'] ?> </td>
                    <td><?php echo $mostrar ['3'] ?> </td>
                    <td><?php echo $mostrar ['4'] ?> </td>
                    <td>

                        <a href="editar_divisa.php?
                        id=<?php echo $mostrar['0'] ?> &
                        divisa=<?php echo $mostrar['1']?> &
                        cantidad_cripto=<?php echo $mostrar['2']?> &
                        moneda=<?php echo $mostrar['3']?> &
                        valor=<?php echo $mostrar['4']?>  
                        ">Editar | </a>
                        <a href="sp_eliminar_divisa.php? id=<?php echo $mostrar['0'] ?>">Eliminar | </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        </div>
    
                    <a href="index.php">Regresar al Inicio</a></center>
        </doby>
            <br><br><br><br>
            <center><h3>Monedas autorizadas (MEX - EUR - USD - YEN - CAD)</h3><br><br>
            <h3>Criptomonedas Autorizadas (bitcoin - ethereum - neo - candano - dogecoin)</h3><br><br></center>

        </html>