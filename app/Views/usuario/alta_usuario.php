<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title">Agregar Usuarios</h1>
    </div>
</div>

<?php $validation = \Config\Services::validation(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" id="addname" name="addname" action="<?php echo base_url('/submit-form') ?>">
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                    <!-- Error -->
                    <?php if ($validation->getError('nombre')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= esc($validation->getError('nombre')) ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido">
                    <?php if ($validation->getError('apellido')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= esc($validation->getError('apellido')) ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="correo@algo.com">
                    <?php if ($validation->getError('email')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= esc($validation->getError('email')) ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                    <?php if ($validation->getError('usuario')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= esc($validation->getError('usuario')) ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña">
                    <?php if ($validation->getError('password')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= esc($validation->getError('password')) ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="passconf" class="form-label">Confirmar Contraseña</label>
                    <input type="password" id="passconf" name="passconf" class="form-control" placeholder="Repita su contraseña">
                    <?php if ($validation->getError('passconf')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= esc($validation->getError('passconf')) ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="perfil_id" class="form-label">Perfil ID</label>
                    <input type="text" id="perfil_id" name="perfil_id" class="form-control" placeholder="Perfil ID">
                    <?php if ($validation->getError('perfil_id')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= esc($validation->getError('perfil_id')) ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Agregar usuario</button>
                    <button type="reset" class="btn btn-info btn-block">Limpiar</button>
                    <a href="<?= site_url('/lista_usuario') ?>" class="btn btn-danger btn-block">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>