<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title">Lista de Usuarios Eliminados</h1>
    </div>
</div>
<div class="container mt-4">
    <!-- Button Section -->
    <div class="row justify-content-center mb-3">
        <div class="col-lg-10">
            <div class="d-flex justify-content-end">
                <a href="<?php echo base_url('/lista_usuario') ?>" class="btn btn-primary">Lista Usuario</a>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Usuario Id</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellido</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <?php if ($usuario['baja'] == 'Si') : ?>
                                <tr>
                                    <td class="text-center"><?php echo $usuario['id_usuario']; ?></td>
                                    <td><?php echo $usuario['nombre']; ?></td>
                                    <td><?php echo $usuario['apellido']; ?></td>
                                    <td><?php echo $usuario['email']; ?></td>
                                    <td class="text-center">
                                        <?php if ($usuario['baja'] == 'Si') : ?>
                                            <a href="<?php echo base_url('activar_usuario/' . $usuario['id_usuario']); ?>" class="btn btn-primary btn-sm">Activar</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="public/assets/js/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="public/assets/css/jquery.dataTables.min.css">
<script type="text/javascript" src="public/assets/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#users-list').DataTable();
    });
</script>