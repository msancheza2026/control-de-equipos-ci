<h1>Áreas</h1>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($areas)): ?>
            <?php foreach ($areas as $area): ?>
                <tr>
                    <td><?= $area['id'] ?></td>
                    <td><?= esc($area['nombre']) ?></td>
                    <td><?= esc($area['descripcion']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">No hay áreas registradas</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
