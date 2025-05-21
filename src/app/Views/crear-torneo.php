<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Crear Torneo</title>
</head>
<body>
<h3>CREA TU PROPIO TORNEO</h3>
<form action="/torneo" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre"/>
    <br>
    <label for="fechaini">Fecha inicio: </label>
    <input type="date" id="fechaini" name="fechaini"/>
    <label for="fechafin">Fecha fin: </label>
    <input type="date" id="fechafin" name="fechafin"/>
    <input type="submit" value="Insertar" />
</form>
</body>
</html>