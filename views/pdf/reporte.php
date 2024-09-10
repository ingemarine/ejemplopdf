<h1>Reporte desde la vista</h1>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre del Producto</th>
            <th>Precio del Producto</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $key => $productos): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $productos['prod_nombre'] ?></td>
                <td>Q. <?= $productos['prod_precio'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<!-- 
<script>
    console.log(produtos)
</script> -->