<?php encabezado() ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h5 class="text-center">Inscripciones </h5>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevoInscripcion"><i class="fas fa-user-plus"></i></button>
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Carrera</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $inscripcion) {
                                    if ($inscripcion['estado'] == 1) {
                                        $estado = '<span class="badge-success p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                                    <tr>
                                        <td><?php echo $inscripcion['id']; ?></td>
                                        <td><?php echo $inscripcion['nombre_alumno']; ?></td>
                                        <td><?php echo $inscripcion['apellido_alumno']; ?></td>
                                        <td><?php echo $inscripcion['carrera_alumno']; ?></td>
                                        <td><?php echo $estado; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo base_url() ?>inscripciones/editar?id=<?php echo $inscripcion['id'] ?>"><i class="fas fa-edit"></i></a>
                                            <?php if ($inscripcion['estado'] == 1) { ?>
                                                <form method="post" action="<?php echo base_url() ?>inscripciones/eliminar" class="d-inline eliminar">
                                                    <input type="hidden" name="id" value="<?php echo $inscripcion['id']; ?>">
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form method="post" action="<?php echo base_url() ?>inscripciones/reingresar" class="d-inline reingresar">
                                                    <input type="hidden" name="id" value="<?php echo $inscripcion['id']; ?>">
                                                    <button class="btn btn-success" type="submit"><i class="fas fa-audio-description"></i></button>
                                                </form>
                                            <?php } ?>
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
    <div id="nuevoInscripcion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="my-modal-title">Registro de Inscripcion</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(); ?>inscripciones/registrar" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_alumno">Nombre</label>
                                    <input id="nombre_alumno" class="form-control" type="text" name="nombre_alumno" required placeholder="nombre del alumno">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellido_alumno">Apellido</label>
                                    <input id="apellido_alumno" class="form-control" type="text" name="apellido_alumno" required placeholder="apellido del alumno">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="carrera_alumno">Carrera</label>
                                    <input id="carrera_alumno" class="form-control" type="text" name="carrera_alumno" required placeholder="carrera del alumno">
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