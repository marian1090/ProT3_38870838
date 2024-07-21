<?php $session = session(); ?>
<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title">Modificar Usuarios</h1>
    </div>
</div>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" id="update_user" name="update_user" action="<?= base_url('/update') ?>">
                <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $user_obj['id_usuario']; ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $user_obj['nombre']; ?>">
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control" value="<?php echo $user_obj['apellido']; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
                </div>
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="usuario" class="form-control" value="<?php echo $user_obj['usuario']; ?>">
                </div>
                <div class="form-group">
                    <label>Contaseña</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $user_obj['password']; ?>">
                </div>
                <div class="form-group py-2">
                    <button type="submit" class="btn btn-primary">Modificar</button>
                    <?php if ($session->get('logged_in') && $session->get('perfil_id') == 1) { ?>
                        <a href="<?php echo base_url('/lista_usuario') ?>" class='btn btn-primary'>Volver</a>
                    <?php } elseif ($session->get('logged_in') && $session->get('perfil_id') == 2) { ?>
                        <a href="<?php echo base_url('/dashboard') ?>" class='btn btn-primary'>Volver</a>
                    <?php } else { ?>
                        <a href="<?php echo base_url('/') ?>" class="btn btn-secondary">Volver</a>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
</div>
</div>