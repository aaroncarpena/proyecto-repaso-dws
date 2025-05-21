<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Crear Participante</title>
</head>
<body>
    <h3>APUNTATE AL TORNEO</h3>
    <?php
    if(isset($_SESSION['usuario'])){
        echo "<p>Ya estás registrado y logeado</p>";
        ?>
        <form method="get" action="/participante/logout">
        <input type="submit" value="Cerrar Sesión">
        </form>
        <?php
    }else{?>
        <form method="post" action="/participante">
            <label for="email">Correo Electrónico: </label>
            <input type="email" id="email" name="email"/>
            <br>
            <label for="password">Contraseña: </label>
            <input type="password" id="password" name="password"/>
            <input type="submit" value="Insertar" />
        </form>
    <?php
    }
    ?>

</body>
</html>