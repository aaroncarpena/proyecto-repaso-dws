<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Crear Torneo</title>
</head>
<body>
<h3>CREA TU PROPIO TORNEO</h3>
<form action="/modificar-torneo" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre" value="<?=$torneo->getNombre()?>"/>
    <br>
    <label for="fechaini">Fecha inicio: </label>
    <input type="date" id="fechaini" name="fechaini" value="<?=$torneo->getFechaini()?>"/>
    <label for="fechafin">Fecha fin: </label>
    <input type="date" id="fechafin" name="fechafin" value="<?=$torneo->getFechafin()?>"/>
</form>
</body>
</html>