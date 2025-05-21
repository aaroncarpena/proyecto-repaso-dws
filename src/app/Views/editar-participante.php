<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Participante</title>
</head>
<body>
<h3>EDITAR PARTICIPANTE</h3>
<form action="/participante/modificar-participante" method="post">
    <input type="hidden" name="uuid" value="<?= $participante->getUuid() ?>">

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($participante->getEmail()) ?>" required>
    <br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" placeholder="Escribe nueva contraseña" required>
    <br>

    <!-- Botón de enviar -->
    <input type="submit" value="Actualizar Participante">
</form>
</body>
</html>
