<?php 
    include("db.php");
        if (isset($_GET['codempleado'])) {
        $codempleado = $_GET['codempleado'];
        $query = "SELECT * FROM empleados WHERE codempleado = $codempleado";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result)==1) {
                
            $row =  mysqli_fetch_array($result);
            //$codempleado = $row['codempleado'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $telmovil = $row['telmovil'];
            $puesto = $row['puesto'];
            $contrasenia = $row['contrasenia'];
            $direccion = $row['direccion'];
            $correo = $row['correo'];
        }
        if (isset($_POST['update2'])) {
                $codempleado = $_GET['codempleado'];/*$_GET*/
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $telmovil = $_POST['telmovil'];
                $puesto = $_POST['puesto'];
                $contrasenia = $_POST['contrasenia'];
                $direccion = $_POST['direccion'];
                $correo = $_POST['correo'];
            $query = "UPDATE empleados set nombre = '$nombre', apellido = '$apellido', telmovil = '$telmovil', 
                      puesto = '$puesto', contrasenia = '$contrasenia', direccion = '$direccion', correo = '$correo' 
                      WHERE codempleado = $codempleado";
            mysqli_query($conn, $query);
            $_SESSION['message'] = 'Actualización completa';
            $_SESSION['message_type'] = 'warning';
            header("Location: pagina2.php");
        }
    }
?>
<?php include("includes/header.php") ?>
    <div class="container" p-4>
         <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit2.php?codempleado=<?php echo $_GET['codempleado']; ?>" method="POST">                        
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualizar nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="apellido" value="<?php echo $apellido; ?>" class="form-control" placeholder="Actualizar apellido">
                        </div>
                        <div class="form-group">
                            <input type="text" name="telmovil" value="<?php echo $telmovil; ?>" class="form-control" placeholder="Actualizar telefono">
                        </div>
                        <div class="form-group">
                            <input type="text" name="puesto" value="<?php echo $puesto; ?>" class="form-control" placeholder="Actualizar puesto">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contrasenia" value="<?php echo $contrasenia; ?>" class="form-control" placeholder="Actualizar contraseña">
                        </div>
                        <div class="form-group">
                            <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="Actualizar dirección">
                        </div>
                        <div class="form-group">
                            <input type="email" name="correo" value="<?php echo $correo; ?>" class="form-control" placeholder="Actualizar correo">
                        </div>
                        <button class="btn btn-success" name="update2">
                            UPDATE 
                        </button>
                        <button onclick="document.location = 'pagina2.php'" class="btn btn-success">Regresar</button>
                    </form>
                </div>
            </div>
         </div>        
    </div>
<?php include("includes/footer.php") ?>