<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title">Lista de Usuarios</h1>
    </div>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('/alta_usuario') ?>" class="btn btn-primary mr-3">Agregar Usuario</a>
        <a href="<?php echo base_url('/usuarios_eliminados') ?>" class="btn btn-secondary">Usuarios Eliminados</a>
    </div>
    <div class="mt-3 table-responsive">
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
                <?php if ($usuarios && ($usuario['baja'] == 'No')) : ?>
                <tr>
                    <td class="text-center"><?php echo $usuario['id_usuario']; ?></td>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['apellido']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td class="text-center">
                        <a href="<?php echo base_url('modificar_usuario/' . $usuario['id_usuario']); ?>"
                            class="btn btn-success">Editar</a>
                        <?php if ($usuario['baja'] == 'No') { ?>
                        <a class="btn btn-primary" onclick="return confirm('¿Eliminar Usuario?');"
                            href="<?php echo base_url('desactivar_usuario/' . $usuario['id_usuario']); ?>">Eliminar</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Eliminar Registro</h4>
            </div>
            <div class="modal-body">
                ¿Desea eliminar este usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cool-blues" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-orange-moon btn-ok"
                    href="<?php echo base_url('desactivar_usuario/' . $usuario['id_usuario']); ?>">Borar</a>
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

<script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>