<?php encabezado() ?>
<!-- Begin Page Content -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>inscripciones/modificar" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre_alumno">Nombre</label>
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                            <input id="nombre_alumno" class="form-control" type="text" name="nombre_alumno" value="<?php echo $data['nombre_alumno']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apellido_alumno">Apellido</label>
                                            <input id="apellido_alumno" class="form-control" type="text" name="apellido_alumno" value="<?php echo $data['apellido_alumno']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="carrera_alumno">Carrera</label>
                                            <input id="carrera_alumno" class="form-control" type="text" name="carrera_alumno" value="<?php echo $data['carrera_alumno']; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Modificar</button>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>inscripciones">Atras</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php pie() ?>