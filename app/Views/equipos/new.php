<?= view('layout/header') ?>

<h1>Nuevo Equipo</h1>

<form method="post" action="<?= site_url('equipos') ?>">
  <label>Código interno:</label><br>
  <input type="text" name="codigo_interno" required><br><br>

  <label>Nombre:</label><br>
  <input type="text" name="nombre" required><br><br>

  <label>Área:</label><br>
  <select name="area_id" required>
    <option value="">-- Selecciona --</option>
    <?php foreach ($areas as $a): ?>
      <option value="<?= esc($a['id']) ?>"><?= esc($a['nombre']) ?></option>
    <?php endforeach; ?>
  </select><br><br>

  <label>Categoría:</label><br>
  <select name="tipo_id" required>
    <option value="">-- Selecciona --</option>
    <?php foreach ($categorias as $c): ?>
      <option value="<?= esc($c['id']) ?>"><?= esc($c['nombre']) ?></option>
    <?php endforeach; ?>
  </select><br><br>

  <button type="submit">Guardar</button>
  <a href="<?= site_url('equipos') ?>">Cancelar</a>
</form>
