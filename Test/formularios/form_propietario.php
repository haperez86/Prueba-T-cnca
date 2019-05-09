<?php
require '../includes/connect.php';
?>

<?php

if (isset($_POST["submit"])) {
    if (!empty($_POST["primernombrep"]) ) {
     }
    if (!empty($_POST["segundonombrep"]) ) {
     }
    if (!empty($_POST["primerapellidop"]) ) {
     }
    if (!empty($_POST["segundoapellidop"]) ) {
     }
    if (!empty($_POST["direccionp"]) ) {
     }
    if (!empty($_POST["telefonop"]) ) {
     }
    if (!empty($_POST["ciudadp"]) ) {
     }

         // Insertar usuario en, la BD
    $primer_nombre = $_POST ['primernombrep'];
    $segundo_nombre = $_POST ['segundonombrep'];
    $primer_apellido = $_POST ['primerapellidop'];
    $segundo_apellido = $_POST ['segundoapellidop'];
    $direccion = $_POST ['direccionp'];
    $telefono = $_POST ['telefonop'];
    $ciudad = $_POST ['ciudadp'];

    $sql = "INSERT INTO propietarios  VALUES(NULL, '{$primer_nombre}','{$segundo_nombre}','{$primer_apellido}','{$segundo_apellido}',
            '{$direccion}','{$telefono}', '{$ciudad}');";
         

    $insert = mysqli_query($db, $sql);

}


?>

<h2>Crear Propietario</h2>


<form action="" method="POST" enctype="multipart/form-data">

    <label for="primernombrep">Primer Nombre:
        <input type="text" name="primernombrep" class="form-control" placeholder="Primer Nombre" >
        

    </label> 
    <br/>    

    <label for="segundonombrep">Segundo Nombre:
        <input type="text" name="segundonombrep" class="form-control" placeholder="Nombre" >


    </label> 
    <br/>    

    <label for="primerapellidop"> Primer Apellidos:
    <input type="text" name="primerapellidop"  class="form-control" placeholder="Primer Apellido" >
    
    </label>
    <br/> 

    <label for="segundoapellidop"> Segundo Apellidos:
    <input type="text" name="segundoapellidop"  class="form-control" placeholder="Segundo Apellido" >
    
    </label>
    <br/> 

    <label for="direccionp"> Direccion:
    <input type="text" name="direccionp"  class="form-control" placeholder="Direccion" >
    
    </label>
    <br/> 

    <label for="telefonop"> Telefono:
    <input type="tel" name="telefonop"  class="form-control" placeholder="Telefono" >
    
    </label>
    <br/> 

    <label for="ciudadp"> Ciudad:
    <input type="text" name="ciudadp"  class="form-control" placeholder="Ciudad" >
    <br/> 

    <input type="submit" value="Enviar" name="submit" class="btn btn-success">

</form>

