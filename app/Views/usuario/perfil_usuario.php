<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title">Agregar Usuarios</h1>
    </div>
</div>

<div class="container mt-5">
  <form method="post" id="addname" name="addname" <?php $validation = \Config\Services::validation(); ?> 
  action="<?php echo base_url('/submit-form') ?>">
    <div class="form-group">
      <label for="exampleFormControlInput1" class="form-label">Nombre</label>
      <input type="text" name="nombre" class="form-control" placeholder="nombre">
      <!-- Error -->
      <?php if ($validation->getError('nombre')) { ?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('nombre'); ?>
        </div>
      <?php } ?>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
      <input type="text" name="apellido" class="form-control" placeholder="apellido">
      <!-- Error -->
      <?php if ($validation->getError('apellido')) { ?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('apellido'); ?>
        </div>
      <?php } ?>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="text" name="email" class="form-control" placeholder="correo@algo.com">
      <!-- Error -->
      <?php if ($validation->getError('email')) { ?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('email'); ?>
        </div>
      <?php } ?>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1" class="form-label">Usuario</label>
      <input type="text" name="usuario" class="form-control" placeholder="usuario">
      <!-- Error -->
      <?php if ($validation->getError('usuario')) { ?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('usuario'); ?>
        </div>
      <?php } ?>
    </div>


    <div class="form-group">
      <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
      <input type="password" name="password" class="form-control" placeholder="password">
      <!-- Error -->
      <?php if ($validation->getError('pass')) { ?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('pass'); ?>
        </div>
      <?php } ?>
    </div>

    <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Confirmar Contraseña</label>
          <input name="passconf" type="password" class="form-control" placeholder="Repita su contraseña">
          <!-- Error -->
          <?php if ($validation->getError('passconf')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('passconf'); ?>
            </div>
          <?php } ?>
        </div>

    <div class="form-group">
      <button type="submit" class="btn btn-green-moon btn-block">Agregar usuario</button>
      <button href="<?php echo site_url('/lista_usuario') ?>" class='btn btn-cool-blues btn-block'>Limpiar</button>
      <a href="<?php echo site_url('/lista_usuario') ?>" class='btn btn-pink-moon btn-block'>Cancelar</a> 

    </div>
  </form>
</div>


