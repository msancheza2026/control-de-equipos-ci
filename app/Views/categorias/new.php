<?= view('layout/header') ?>

<a href="<?= site_url('/') ?>">Inicio</a>


<h1>Nueva Categoría</h1>

<form method="post" action="<?= site_url('categorias') ?>">
  <label>Nombre:</label><br>
  <input type="text" name="nombre" required><br><br>

  <label>Descripción:</label><br>
  <input type="text" name="descripcion"><br><br>

  <button type="submit">Guardar</button>
  <a href="<?= site_url('categorias') ?>">Cancelar</a>
</form>
