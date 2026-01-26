<?= view('layout/header') ?>

<h1>Categorías</h1>

<p><a href="<?= site_url('categorias/new') ?>">+ Nueva categoría</a></p>

<?php if (empty($categorias)): ?>
  <p>No hay categorías registradas.</p>
<?php else: ?>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Descripción</th>
    </tr>

    <?php foreach ($categorias as $c): ?>
      <tr>
        <td><?= esc($c['id']) ?></td>
        <td><?= esc($c['nombre']) ?></td>
        <td><?= esc($c['descripcion'] ?? '') ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>
