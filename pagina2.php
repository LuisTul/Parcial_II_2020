<?php include("db.php")?>
<?php include("includes/header.php")?>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="pagina1.php" class="navbar-brand">Cuentahabientes</a>
            <a href="" class="navbar-brand">Empleados</a>
            <a href="pagina3.php" class="navbar-brand">Puestos</a>
            <a href="pagina4.php" class="navbar-brand">Tipo de cuenta</a>            
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-9">
            <br><br><h1 align="center">Empleados</h1>
            </div>
            <div class="col-3">                    
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset(); } ?><br>
                <div class="card card-body">
                    <form action="buscar2.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="txtcodempleado" class="form-control" placeholder="Código de empleado" autofocus>
                            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Buscar">
                        </div>                            
                            
                    </form>
                </div>
            </div>                          
        </div>
    </div>
    <div class="containe p-4">
        <div class="row">
            <div class="col-md-3">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="save_task2.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="txtcodempleado" class="form-control" placeholder="Código empleado" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtnombre" class="form-control" placeholder="Nombre" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtapellido" class="form-control" placeholder="Apellido" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txttelefono" class="form-control" placeholder="Telefono movil" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtpuesto" class="form-control" placeholder="Puesto" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" name="txtpass" class="form-control" placeholder="Contraseña" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdireccion" class="form-control" placeholder="Dirección" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtcorreo" class="form-control" placeholder="Correo" autofocus>
                        </div>                        
                            <input type="submit" class="btn btn-success btn-block" name="save_task2" value="Crear">
                    </form>
                </div>
            </div>
            <div class="col-md-9">
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
                        <?php 
                            $query = "SELECT * FROM empleados";
                            $result_tasks = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_array($result_tasks)) { ?>
                                <tr>
                                    <td><?php echo $row['codempleado'] ?></td>
                                    <td><?php echo $row['nombre'] ?></td>
                                    <td><?php echo $row['apellido'] ?></td>
                                    <td><?php echo $row['telmovil'] ?></td>
                                    <td><?php echo $row['puesto'] ?></td>
                                    <td><?php echo $row['contrasenia'] ?></td>
                                    <td><?php echo $row['direccion'] ?></td>
                                    <td><?php echo $row['correo'] ?></td>
                                    <td>
                                        <a href="edit2.php?codempleado=<?php echo $row['codempleado']?>" class="btn btn-secondary" title="Editar">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="delete_task2.php?codempleado=<?php echo $row['codempleado']?>" class="btn btn-danger" title="Borrar">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
                
            </div>
        </div>
   </div>


<?php include("includes/footer.php")?>