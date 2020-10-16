<?php 
    include("db.php");
    if (isset($_GET['codempleado'])) {
        $codempleado = $_GET['codempleado'];
        $query = "DELETE FROM empleados WHERE codempleado = $codempleado"; 
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Failed");
        }
        $_SESSION['message'] = 'Datos borrados correctamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: pagina2.php");
    }

?>