
<h1>Nueva Área</h1>

<form method="post" action="<?= site_url('areas') ?>">
  <label>Nombre del área:</label><br>
  <input type="text" name="nombre" required><br><br>

  <label>Descripción:</label><br>
  <input type="text" name="descripcion"><br><br>

  <button type="submit">Guardar</button>
  <a href="/areas">Cancelar</a>
</form>
