<?php
    include("db.php");

    if (isset($_POST['save_task2'])) {
        $codempleado = $_POST['txtcodempleado'];
        $nombre = $_POST['txtnombre'];
        $apellido = $_POST['txtapellido'];
        $telmovil = $_POST['txttelefono'];
        $puesto = $_POST['txtpuesto'];
        $contrasenia = $_POST['txtpass'];
        $direccion = $_POST['txtdireccion'];
        $correo = $_POST['txtcorreo'];
             
        $query = "INSERT INTO empleados(codempleado, nombre, apellido, telmovil, puesto, contrasenia, direccion, correo) 
                  VALUES ('$codempleado', '$nombre', '$apellido', '$telmovil', '$puesto', '$contrasenia', '$direccion', '$correo')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Failed");
        }
        //echo "saved";
        $_SESSION['message'] = 'Datos guardados satisfactoriamente';
        $_SESSION['message_type'] = 'success';

        header("Location: pagina2.php");
    } 
        

?>