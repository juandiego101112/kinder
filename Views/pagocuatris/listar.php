<?php encabezado() ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h5 class="text-center">Pago de Cuatrimestres </h5>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevoPagocuatri"><i class="fas fa-user-plus"></i></button>
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Carrera</th>
                                    <th>Cuatrimestre</th>
                                    <th>Monto</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $pago) {
                                    if ($pago['estado'] == 1) {
                                        $estado = '<span class="badge-success p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                               
                                    <tr>
                                        <td><?php echo $pago['id']; ?></td>
                                        <td><?php echo $pago['nombre_alumno']; ?></td>
                                        <td><?php echo $pago['carrera_alumno']; ?></td>
                                        <td><?php echo $pago['cuatrimestre']; ?></td>
                                        <td><?php echo $pago['monto']; ?></td>
                                        <td>
                                        <a class="btn btn-primary" href="<?php echo base_url() ?>pagocuatris/editar?id=<?php echo $pago['id'] ?>"><i class="fas fa-edit"></i></a>
                                            
                                                
                                           
                                          
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="nuevoPagocuatri" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="my-modal-title">Registro de Pago cuatrimestres</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(); ?>pagocuatris/registrar" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_alumno">Nombre</label>
                                    <input id="nombre_alumno" class="form-control" type="text" name="nombre_alumno" required placeholder="nombre del alumno">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="carrera_alumno">Carrera</label>
                                    <input id="carrera_alumno" class="form-control" type="text" name="carrera_alumno" required placeholder="carrera del alumno">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cuatrimestre">Cuatrimestre</label>
                                    <input id="cuatrimestre" class="form-control" type="text" name="cuatrimestre" required placeholder="Numero de Cuatrimestre">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="monto">Monto</label>
                                    <input id="monto" class="form-control" type="text" name="monto" required placeholder="Monto a pagar">
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Registrar</button>
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Atras</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php pie() ?>