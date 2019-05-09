<?php
include '../includes/connect.php';
?>

<?php

if (isset($_POST["submit"])) {
    if (!empty($_POST["color"]) ) {
     }
    if (!empty($_POST["placa"]) ) {
     }
    if (!empty($_POST["marca"]) ) {
     }
    if (!empty($_POST["tipovehiculo"]) ) {
     }
     if (!empty($_POST["idconductor"]) ) {
    }
    if (!empty($_POST["idpropietario"]) ) {
    }


    // Insertar usuario en, la BD
    $color = $_POST ['color'];
    $placa = $_POST ['placa'];
    $marca = $_POST ['marca'];
    $tipovehiculo = $_POST ['tipovehiculo'];
    $idconductor = $_POST ['idconductor'];
    $idpropietario = $_POST ['idpropietario'];
    
    try {
        $sql = "INSERT INTO vehiculo (marca, placa, color, tipovehiculo, idconductor, idpropietario)  VALUES ('{$marca}', '{$placa}', '{$color}','{$tipovehiculo}','{$idconductor}','{$idpropietario}' );";
        echo $sql;
    } catch (Exception  $e) {
        echo $e->getMessage();
    }
   

         
    $insert = mysqli_query($db, $sql);



}


?>

<h2>Crear Vehiculo</h2>


<form action="" method="POST" enctype="multipart/form-data">

    <label for="color">Color:
        <input type="text" name="color" class="form-control" placeholder="Color" >
        

    </label> 
    <br/>    

    <label for="placa">Placa:
        <input type="text" name="placa" class="form-control" placeholder="Placa" >


    </label> 
    <br/>    

    <label for="marca"> Marca:
    <input type="text" name="marca"  class="form-control" placeholder="Marca" >
    
    </label>
    <br/> 

    </label>
    <br/> 

    <label for=" tipovehiculo">Tipo de Vehiculo:
    <select name="tipovehiculo" >
        <option value="particular">Particular</option>
        <option value="publico">Publico</option>
    </select>
        
    </label>
    <br/>

    <label for=" idconductor">Id Conductor:
    <select name="idconductor" >
        <option value="">Seleccione Conductor</option>
        <?php
            $consulta= "SELECT idconductor, primernombre FROM conductor";
            $conductores = mysqli_query($db, $consulta);

            while ($resultado = mysqli_fetch_array($conductores)) {
                echo "<option value='".$resultado[idconductor]."'>".$resultado[primernombre]."</option>";
            }
        ?>

    </select>
        
    </label>
    <br/>
    </label>
    <br/>

    <label for=" idpropietario">Id Propietario:
    <select name="idpropietario" >
        <option value="">Seleccione Propietario</option>
        <?php
            $consulta= "SELECT idpropietario, primernombrep FROM propietarios";
            $propietarios = mysqli_query($db, $consulta);
            
           while ($resultado = mysqli_fetch_array($propietarios)) {
                echo "<option value='".$resultado[idpropietario]."'>".$resultado[primernombrep]."</option>";
            }
        ?>
    </select>
        
    </label>
    <br/>


    <input type="submit" value="Enviar" name="submit" class="btn btn-success">

</form>
