<!
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Clientes</title>
</head>
<body>
<h2>Listado de Participantes</h2>
<p>Aquí se mostrarán todos los participantes.</p>
<a href="/participante/registro">Registrate aquí</a>
<?php $dirEditParticipante ="/participante/".$_SESSION['uuid']."/modificar";?>
<a href="<?=$dirEditParticipante?>">Cambia tus datos</a>
</body>
</html>