<style>
    table{
        border: 2px solid black;
    }
</style>

<h1>Reporte desde la vista</h1>

<table>
    <thead>
        <tbody>
<?php foreach ($productos as $key => $producto): ?>


        </tbody>
        <tr>
            <th><?= $key+1 ?></th>
            <th><?= $productos['prod_nombre']?></th>
            <th><?= $productos['prod_precio']?></th>
           

<?php endforeach ?>
        </tr>
    </thead>
</table>