<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-primary shadow">
                <div class="card-body">
                    <h1 class="card-title text-center">¡Hola, <?= session()->get('nombre') ?>!</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Gracias por tu visita <i class="far fa-smile"></i></h3>
                    <p class="card-text">Descubre nuestra amplia selección de productos.</p>
                    <div class="form-group py-2">
                        <a href="#" class="btn btn-primary">Ver todos los productos</a>
                        <a href="<?php echo base_url('/'); ?>" class="btn btn-secondary">Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
