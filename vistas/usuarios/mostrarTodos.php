<h1> Listado de usuarios </h1>

<?php while($usuario = $todosLosUsuarios -> fetch_object()):?>
<ul>
    <li> <?= $usuario->nombre?></li>
    <li> <?= $usuario->email?></li>
</ul>
<?php endwhile; ?>