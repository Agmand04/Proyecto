<?php include_once "../../includes/encabezado.php"?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <a class="btn btn-primary" href="<?php echo base_url(); ?><View/Cliente/ListarCliente.php"><i class="fas fa-arrow-alt-circle-left"></i> Regresar</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="Table">
                            <thead class="thead-dark">
                                <tr>
                                <th>Id</th>
				            	<th>Nombre</th>
				            	<th>Apellido</th>
				            	<th>Correo</th>
			                	<th>Contrasena</th>
					            <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Barrio</th>
                                <th>Departamento</th>
                                <th>Ciudad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $cl) { ?>
                                    <tr>
                                        <td><?php echo $cl['Id']; ?></td>
                                        <td><?php echo $cl['Nombre']; ?></td>
                                        <td><?php echo $cl['Apellido']; ?></td>
                                        <td><?php echo $cl['Correo']; ?></td>
                                        <td><?php echo $cl['Contrasena']; ?></td>
                                        <td><?php echo $cl['Telefono']; ?></td>
                                        <td><?php echo $cl['Direccion']; ?></td>
                                        <td><?php echo $cl['Barrio']; ?></td>
                                        <td><?php echo $cl['Departamento']; ?></td>
                                        <td><?php echo $cl['Ciudad']; ?></td>
                                        <td>
                                            <form action="<?php echo base_url() ?>Clientes/reingresar?id=<?php echo $cl['id']; ?>" method="post" class="d-inline confirmar">
                                                <button type="submit" class="btn btn-success"><i class="fas fa-ad"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once "../../includes/pie.php" ?>