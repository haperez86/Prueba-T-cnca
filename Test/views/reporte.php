<?php
include_once '../header.php';
require '../includes/connect.php';

/*$consulta =  "SELECT placa, marca, primernombre, segundonombre, primerapellido,
 segundoapellido, primernombrep, segundonombrep, primerapellidop, segundoapellidop FROM vehiculo, 
 conductor, propietarios ";*/

$consulta =  "select a.placa, a.marca, b.primernombre, b.segundonombre, b.primerapellido, b.segundoapellido, c.primernombrep, c.segundonombrep, c.primerapellidop, c.segundoapellidop 
from vehiculo a join conductor b on a.idconductor = b.idconductor join propietarios c on a.idpropietario = c.idpropietario
order by a.placa, b.primernombre, c.primernombrep";
$informe = mysqli_query($db, $consulta);

?>

<table class="table">
    <tr>
        <th>Placa</th>
        <th>Marca</th>
        <th>Nombre Conductor</th>
        <th>Nombre Propietario</th>
    </tr>
    <?php while ($resultado = mysqli_fetch_array($informe)) {?>
        <tr>
            <td><?= $resultado["placa"]?></td>
            <td><?= $resultado["marca"]?></td>
            <td><?= $resultado["primernombre"]." ".$resultado["segundonombre"]." "
            .$resultado["primerapellido"]." ".$resultado["segundoapellido"]?></td>
            <td><?= $resultado["primernombrep"]." ". $resultado["segundonombrep"]." ".
             $resultado["primerapellidop"]." ". $resultado["segundoapellidop"]?></td>

        </tr>
    <?php } ?>    
</table>


<?php include '../includes/footer.php'; ?>