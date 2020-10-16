<?php 
    include("db.php");
        if (isset($_POST['txtcodempleado'])) {
        $codempleado = $_POST['txtcodempleado'];
        $query = "SELECT * FROM empleados WHERE codempleado = $codempleado";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result)==1) {
            $row =  mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $telmovil = $row['telmovil'];
            $puesto = $row['puesto'];
            $contrasenia = $row['contrasenia'];
            $direccion = $row['direccion'];
            $correo = $row['correo'];
        }
    }
?>

<?php include("includes/header.php")?>
    <div class="col-mde-12">
        <h1 align="center">Resultados</h1>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Cod. Emp.</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono M.</th>
                <th>Puesto</th>
                <th>contraseña</th>
                <th>Dirrección</th>
                <th>Correo</th>
                <th>Acci.</th> 
                </tr>
            </thead>
            <tbody>                            
                <tr>
                    <td><?php echo $codempleado; ?></td>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $apellido; ?></td>
                    <td><?php echo $telmovil; ?></td>
                    <td><?php echo $puesto; ?></td>
                    <td><?php echo $contrasenia; ?></td>
                    <td><?php echo $direccion; ?></td>
                    <td><?php echo $correo; ?></td>
                    <td>
                    <a href="edit2.php?codempleado=<?php echo $row['codempleado']?>" class="btn btn-secondary" title="Editar">
                        <i class="fas fa-marker"></i>
                    </a>
                    <a href="delete_task2.php?codempleado=<?php echo $row['codempleado']?>" class="btn btn-danger" title="Borrar">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    </td>
                </tr>                                
            </tbody>
        </table>                  
    </div>
    <div class="col-md-12">
        <center><button onclick="document.location = 'pagina2.php'" class="btn btn-success">Regresar</button><br><br></center>
    </div>
    
<?php include("includes/footer.php")?>