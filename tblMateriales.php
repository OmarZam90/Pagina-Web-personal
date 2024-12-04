<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de clientes</title>
    <link rel="shortcut icon" href="./img/cliente.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/php.css">
    <link rel="stylesheet" href="./css/datos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <header class="header">
    <h1 class="header-1">Tabla de Clientes</h1>
    <div class="imagen">
        <img src="./img/tbl.png" alt="tblMateriales">
    </div>        
</header>  
    <div class="container my-4">
        <table class="table table-dark table-striped mi-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">País</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect("localhost","root","","dbMateriales");
                if(!$conexion) {
                    die("La conexión no fue exitosa");
                }
                $sql = "SELECT * FROM clientes";
                $result = mysqli_query($conexion,$sql);
                while($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];  
                    $empresa = $row["empresa"];  
                    $contacto = $row["contacto"];  
                    $pais = $row["pais"];  
                    echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$empresa</td>
                        <td>$contacto</td>
                        <td>$pais </td>
                        </tr>";
                } 
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="./clientes.html" class="boton">Formulario</a>
        </div>
        <div class="container">
    <a href="index.html" class="regresar-btn">Regresar</a>
</div>

</body>
</html>