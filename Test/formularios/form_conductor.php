<?php

require '../includes/connect.php';
?>

<?php

if (isset($_POST["submit"])) {
    if (!empty($_POST["primernombre"]) ) {
     }
    if (!empty($_POST["segundonombre"]) ) {
     }
    if (!empty($_POST["primerapellido"]) ) {
     }
    if (!empty($_POST["segundoapellido"]) ) {
     }
    if (!empty($_POST["direccion"]) ) {
     }
    if (!empty($_POST["telefono"]) ) {
     }
    if (!empty($_POST["ciudad"]) ) {
     }

         // Insertar usuario en, la BD
    $primer_nombre = $_POST ['primernombre'];
    $segundo_nombre = $_POST ['segundonombre'];
    $primer_apellido = $_POST ['primerapellido'];
    $segundo_apellido = $_POST ['segundoapellido'];
    $direccion = $_POST ['direccion'];
    $telefono = $_POST ['telefono'];
    $ciudad = $_POST ['ciudad'];

    $sql = "INSERT INTO conductor VALUES( NULL, '{$primer_nombre}','{$segundo_nombre}','{$primer_apellido}','{$segundo_apellido}',    
            '{$direccion}','{$telefono}', '{$ciudad}');";

            

    $insert = mysqli_query($db, $sql);


  
}


?>


<h2>Crear Conductor</h2>


<form action="" method="POST" enctype="multipart/form-data">

    <label for="primernombre">Primer Nombre:
        <input type="text" name="primernombre" class="form-control" placeholder="Primer Nombre" >
        

    </label> 
    <br/>    

    <label for="segundonombre">Segundo Nombre:
        <input type="text" name="segundonombre" class="form-control" placeholder="Nombre" >


    </label> 
    <br/>    

    <label for="primerapellido"> Primer Apellidos:
    <input type="text" name="primerapellido"  class="form-control" placeholder="Primer Apellido" >
    
    </label>
    <br/> 

    <label for="segundoapellido"> Segundo Apellidos:
    <input type="text" name="segundoapellido"  class="form-control" placeholder="Segundo Apellido" >
    
    </label>
    <br/> 

    <label for="direccion"> Direccion:
    <input type="text" name="direccion"  class="form-control" placeholder="Direccion" >
    
    </label>
    <br/> 

    <label for="telefono"> Telefono:
    <input type="tel" name="telefono"  class="form-control" placeholder="Telefono" >
    
    </label>
    <br/> 

    <label for="ciudad"> Ciudad:
    <input type="text" name="ciudad"  class="form-control" placeholder="Ciudad" >
    <br/> 

    <input type="submit" value="Enviar" name="submit" class="btn btn-success">

</form>

<?php include '../includes/footer.php'; ?>