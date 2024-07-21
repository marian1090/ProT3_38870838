<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title">Inicio de Sesión</h1>
    </div>
</div>

<div class="container mt-3">
    <div class="row justify-content-md-center">
        <div class="col-6 mt-3">
            <div class="form-group">
                <h2 class="jumbo-title text-center">Ingresar</h2>
                <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('msg') ?>
                </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url('/enviar-login') ?>">
                    <div class="form-group mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="E-mail" class="form-control">
                        <?php if (session()->getFlashdata('errors')) : ?>
                        <div class='alert alert-danger mt-2'>
                            <?= session()->getFlashdata('errors')['email'] ?? '' ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña"
                            class="form-control">
                        <?php if (session()->getFlashdata('errors')) : ?>
                        <div class='alert alert-danger mt-2'>
                            <?= session()->getFlashdata('errors')['password'] ?? '' ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        <button type="button" class="btn btn-secondary btn-block mt-2">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card rounded p-3 text-center">
                <p>¿Aún no está registrado? <a href="<?= base_url('registrarse') ?>">Registrarse</a></p>
            </div>
        </div>
    </div>
</div>