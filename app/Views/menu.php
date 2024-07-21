<?php $session = session(); ?>
<?php if ($session->get('logged_in')) { ?>

<?php if ($session->get('perfil_id') == 1) { ?>
<nav class="navbar navbar-expand-lg lead">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand mt-2 mt-lg-0" href="<?php echo base_url('dashboard_admin'); ?>">
                <img src="<?php echo base_url('public/assets/img/logo1.png'); ?>" height="50" alt="Logo-circular"
                    loading="lazy" />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"> <i
                            class="far fa-id-card"></i> Administrar Usuarios <b class="caret"></b></a>
                    <div class="dropdown-menu">
                        <a href="<?php echo base_url('lista_usuario'); ?>" class="dropdown-item"><i
                                class="fa fa-user-o"></i> Lista de usuarios</a>
                        <a href="<?php echo base_url('alta_usuario'); ?>" class="dropdown-item"><i
                                class="fa fa-calendar-o"></i> Agregar un usuario</a>
                        <a href="<?php echo base_url('usuarios_eliminados'); ?>" class="dropdown-item"><i
                                class="fa fa-calendar-o"></i> Usuarios eliminados</a>
                    </div>
                </div>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"> Bienvenido
                        <?php echo $session->get('nombre'); ?><b class="caret"></b></a>
                    <div class="dropdown-menu">
                        <a href="<?php echo base_url('modificar_usuario/') . ($session->get('id_usuario')); ?>"
                            class="dropdown-item"><i class="fa fa-user-o"></i> Modificar Perfil</a>
                        <a href="<?php echo base_url('dashboard_admin'); ?>" class="dropdown-item"><i
                                class="fa fa-calendar-o"></i> Panel</a>
                        <div class="divider dropdown-divider"></div>
                        <a href="<?php echo base_url('/logout'); ?>" class="dropdown-item"><i
                                class="fas fa-power-off"></i> Salir</a>
                    </div>
</nav>
<?php } ?>

<?php if ($session->get('perfil_id') == 2) { ?>
<nav class="navbar navbar-expand-lg lead">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url(''); ?>">
            <img src="<?php echo base_url('public/assets/img/logo1.png'); ?>" height="50" alt="Logo-circular"
                loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(''); ?>"><i class="fa fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('nosotros'); ?>"><i class="fa fa-users"></i> Quiénes
                        Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('acerca'); ?>"><i class="fa fa-handshake"></i> Acerca
                        de</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Catalogo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Vestidos</a></li>
                        <li><a class="dropdown-item" href="#">Remeras</a></li>
                        <li><a class="dropdown-item" href="#">Polleras</a></li>
                        <li><a class="dropdown-item" href="#">Zapatos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
                    </ul>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mx-auto">
                <div class="input-group">
                    <input type="search" id="form1" class="form-control" placeholder="Buscar...">
                    <div class="input-group-append">
                        <button class="btn btn-buscar" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex align-items-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#!">
                        <i class="fas fa-shopping-cart"></i> <span>Carrito</span>
                    </a>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">
                    Bienvenido <?php echo $session->get('nombre'); ?><b class="caret"></b>
                </a>
                <div class="dropdown-menu">
                    <a href="<?php echo base_url('modificar_usuario/') . ($session->get('id_usuario')); ?>"
                        class="dropdown-item">
                        <i class="fa fa-user-o"></i> Modificar Perfil
                    </a>
                    <div class="divider dropdown-divider"></div>
                    <a href="<?php echo base_url('/logout'); ?>" class="dropdown-item">
                        <i class="fas fa-power-off"></i> Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<?php } ?>

<?php } else { ?>
<nav class="navbar navbar-expand-lg lead ">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url(''); ?>">
            <img src="public/assets/img/logo1.png" height="50" alt="Logo-circular" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(''); ?>"><i class="fa fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('nosotros'); ?>"><i class="fa fa-users"></i> Quiénes
                        Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('acerca'); ?>"><i class="fa fa-handshake"></i> Acerca
                        de</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 mx-auto">
                <div class="input-group">
                    <input type="search" id="form1" class="form-control" placeholder="Buscar...">
                    <div class="input-group-append">
                        <button class="btn btn-buscar" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in-alt"></i>
                        Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('registrarse'); ?>"><i class="fa fa-user-plus"></i>
                        Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>