<h1>Listado de notas</h1>


<?php while($nota = $notas -> fetch_object()):?>
<ul>
    <li> <?= $nota->titulo?></li>
    <li> <?= $nota->fecha?></li>
    <li> <?= $nota->descripcion?></li>
</ul>
<?php endwhile; ?>