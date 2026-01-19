
<h1>Nueva Área</h1>

<form method="post" action="<?= site_url('areas') ?>">
  <?= csrf_field() ?>

  <label>Nombre del área:</label><br>
  <input type="text" name="nombre" required><br><br>

  <label>Descripción:</label><br>
  <textarea name="descripcion" rows="3"></textarea><br><br>

  <button type="submit">Guardar</button>
  <a href="<?= site_url('areas') ?>">Cancelar</a>
</form>
