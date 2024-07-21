<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title">Inicio de Sesión</h1>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-6 mt-5">
            <div class="card rounded p-2">
                <h2 class="jumbo-title text-center">Ingresar</h2>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?php echo base_url('/enviar-login') ?>">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="E-mail" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Contraseña" class="form-control">
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <button type="submit" class="btn btn-primary btn-lg mb-2">Iniciar Sesión</button>
                        <button type="button" class="btn btn-secondary btn-lg">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card rounded p-3 text-center">
                <p>¿Aún no está registrado? <a href="<?php echo base_url('registrarse'); ?>">Registrarse</a></p>
            </div>
        </div>
    </div>
</div>
