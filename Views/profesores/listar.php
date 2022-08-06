<?php encabezado() ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h5 class="text-center">Profesores </h5>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevoProfesor"><i class="fas fa-user-plus"></i></button>
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Materia</th>
                                    <th>Grado de estudios</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $profesor) {
                                    if ($profesor['estado'] == 1) {
                                        $estado = '<span class="badge-success p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                                    <tr>
                                        <td><?php echo $profesor['id']; ?></td>
                                        <td><?php echo $profesor['nombre_profesor']; ?></td>
                                        <td><?php echo $profesor['apellido_profesor']; ?></td>
                                        <td><?php echo $profesor['materia_profesor']; ?></td>
                                        <td><?php echo $profesor['grado_estudios']; ?></td>
                                        <td><?php echo $estado; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo base_url() ?>profesores/editar?id=<?php echo $profesor['id'] ?>"><i class="fas fa-edit"></i></a>
                                            <?php if ($profesor['estado'] == 1) { ?>
                                                <form method="post" action="<?php echo base_url() ?>profesores/eliminar" class="d-inline eliminar">
                                                    <input type="hidden" name="id" value="<?php echo $profesor['id']; ?>">
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form method="post" action="<?php echo base_url() ?>profesores/reingresar" class="d-inline reingresar">
                                                    <input type="hidden" name="id" value="<?php echo $profesor['id']; ?>">
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
    <div id="nuevoProfesor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="my-modal-title">Registro de Profesores</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(); ?>profesores/registrar" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_profesor">Nombre</label>
                                    <input id="nombre_profesor" class="form-control" type="text" name="nombre_profesor" required placeholder="nombre del profesor">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellido_profesor">Apellido</label>
                                    <input id="apellido_profesor" class="form-control" type="text" name="apellido_profesor" required placeholder="apellido del profesor">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="materia_profesor">Materia</label>
                                    <input id="materia_profesor" class="form-control" type="text" name="materia_profesor" required placeholder="materia del profesor">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="grado_estudios">Grado de estudios</label>
                                    <input id="grado_estudios" class="form-control" type="text" name="grado_estudios" required placeholder="Grado de estudios">
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