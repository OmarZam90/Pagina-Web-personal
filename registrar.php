<?php 
include 'conexion.php';
$empresa = $_POST["empresa"];
$contacto = $_POST["contacto"];
$pais = $_POST["pais"];
function validarCamposVacios($campo) {
    return empty($campo);
}

if (validarCamposVacios($empresa) || validarCamposVacios($contacto) || validarCamposVacios($pais) ) {
    echo '<script>
            alert("No puede poner campos vacíos");
            window.history.go(-1);
        </script>';
    exit;
}
$insertar = "INSERT INTO clientes (empresa,contacto,pais) VALUES ('$empresa','$contacto','$pais')";

$verificar_cliente = mysqli_query($conexion,"SELECT * FROM clientes WHERE empresa = '$empresa'");

if (mysqli_num_rows($verificar_cliente) > 0) {
    echo '<script>    
         alert("Este cliente ya fue registrado");
         window.history.go(-1);
        </script>';  
    exit;
}
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado) {
    echo '<script> 
            alert("Error de registro");
            window.history.go(-1);
        </script>';
} else {
    echo '<script> 
            alert("Registro efecturado correctamente");
            window.history.go(-1);
        </script>';   
}
// Cerrar consultas
mysqli_close($conexion);