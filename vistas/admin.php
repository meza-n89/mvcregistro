<?php
require_once ("../controladores/controlador_admin.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        
        <div>
            <form method="GET" action="../controladores/controlador_admin.php">
                <select name="grado">
                <?php foreach ($obje as $mostrar):?>
                    <option value="<?php echo['id_grado']?>"><?php echo $mostrar['grado']?></option>
                <?php endforeach;?>
                    </select>
                <br>
                <br>
                <input type="submit" value="Mostrar">
            </form>
        </div>

        <table border="1" cellspacing="3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Grado</th>
                    <th>Turno</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objeto_alumno as $alumno):?>
                <tr>
                    <td><?php echo $alumno['nombre']?></td>
                    <td><?php echo $alumno['apellido']?></td>
                    <td><?php echo $alumno['grado']?></td>
                    <td><?php echo $alumno['turno']?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        
    </body>
</html>
