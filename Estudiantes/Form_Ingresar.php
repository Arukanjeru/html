<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 24/7/2019
 * Time: 20:29
 */
?>
<html>
<head>
    <title></title>
</head>
<body>
<form action="guardar.php" method="post">
    <label>Nombre Completo</label>
    <p></p>
    <input type="text" name="nombre_completo">
    <p></p>
    <label>Correo</label>
    <p></p>
    <input type="email" name="correo">
    <p></p>
    <label>Clase</label>
    <p></p>
    <select name="codigo_curso">
        <option value="1">PHP</option>
        <option value="2">ASP</option>
        <option value="3">Java Script</option>
    </select>
    <p></p>
    <button type="submit" name="guardar">Guardar</button>
    <p></p>
    <button><a href="index.php">Regresar</a></button>
</form>
</body>
</html>

