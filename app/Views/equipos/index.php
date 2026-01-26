<?= view('layout/header') ?>

<h1>Equipos</h1>

<p><a href="<?= site_url('equipos/new') ?>">+ Nuevo equipo</a></p>

<?php if (empty($equipos)): ?>
  <p>No hay equipos registrados.</p>
<?php else: ?>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Código</th>
      <th>Nombre</th>
      <th>Área</th>
      <th>Categoría</th>
      <th>Estado</th>
    </tr>

    <?php foreach ($equipos as $e): ?>
      <tr>
        <td><?= esc($e['id']) ?></td>
        <td><?= esc($e['codigo_interno']) ?></td>
        <td><?= esc($e['nombre']) ?></td>
        <td><?= esc($e['area_id']) ?></td>
        <td><?= esc($e['tipo_id']) ?></td>        
        <td><?= esc($e['estado']) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>
