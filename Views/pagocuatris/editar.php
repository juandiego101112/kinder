<?php encabezado() ?>
<!-- Begin Page Content -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>pagocuatris/modificar" method="post" enctype="multipart/form-data" autocomplete="off">
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
                                            <label for="carrera_alumno">Carrera</label>
                                            <input id="carrera_alumno" class="form-control" type="text" name="carrera_alumno" value="<?php echo $data['carrera_alumno']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cuatrimestre">Cuatrimestre</label>
                                            <input id="cuatrimestre" class="form-control" type="text" name="cuatrimestre" value="<?php echo $data['cuatrimestre']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="monto">Monto a pagar</label>
                                            <input id="monto" class="form-control" type="text" name="monto" value="<?php echo $data['monto']; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Modificar</button>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>pagocuatris">Atras</a>
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