<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <meta name="viewport" content = "width-device-width, initial-scale=1.0">
    <title>Document Buscar</title>
    <link rel="stylesheet" href="css/estilo.css">
</head> 
<body>
    <?php
        $buscar = $_POST['buscar'];
    ?>
<center><div>
        <form action="buscar_divisa.php" method="post"><br><br>
            <input type = "text" name="buscar" id="" value= "<?=$buscar?>"><br><br>
            <input type = "submit" value="Buscar"><br><br>
            <a href = "nuevo_divisa.php">NUEVO</a>
        </form>
    </div>

    <div>
      <center>  <table border ="12">
            <tr>
                <td>ID</td>
                <td>DIVISA</td>
                <td>CANTIDAD CRIPTOMONEDA</td>
                <td>MONEDA</td>
                <td>VALOR</td>
            </tr>
            <?php
            $buscar = $_POST['buscar'];

            $conex = mysqli_connect("localhost","root","","criptomonedas"); 
            $consulta = "SELECT id, divisa, cantidad_cripto,moneda,valor FROM divisas where divisa like '$buscar' '%' or moneda like '$buscar' '%' order by id desc";
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
        </html>