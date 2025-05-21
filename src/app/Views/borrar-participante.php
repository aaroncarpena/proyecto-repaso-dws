<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Crear Participante</title>
</head>
<body>
    <h3>APUNTATE AL TORNEO</h3>
    <form action="/borrar-participante" method="get">
        <label for="email">Correo Electrónico: </label>
        <input type="email" id="email" name="email" value="<?=$participante->getEmail()?>"/>
        <br>
        <label for="passwd">Contraseña: </label>
        <input type="password" id="passwd" name="passwd" value="<?=$participante->getPassword()?>"/>
        <input type="submit" value="Borrar" />
    </form>
</body>
</html>