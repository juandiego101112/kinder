<?php encabezado() ?>
<!-- Begin Page Content -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>profesores/modificar" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre_profesor">Nombre</label>
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                            <input id="nombre_profesor" class="form-control" type="text" name="nombre_profesor" value="<?php echo $data['nombre_profesor']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apellido_profesor">Apellido</label>
                                            <input id="apellido_profesor" class="form-control" type="text" name="apellido_profesor" value="<?php echo $data['apellido_profesor']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="materia_profesor">Materia</label>
                                            <input id="materia_profesor" class="form-control" type="text" name="materia_profesor" value="<?php echo $data['materia_profesor']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="grado_estudios">Grado de estudios</label>
                                            <input id="grado_estudios" class="form-control" type="text" name="grado_estudios" value="<?php echo $data['grado_estudios']; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Modificar</button>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>profesores">Atras</a>
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