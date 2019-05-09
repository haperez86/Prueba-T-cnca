<?php


foreach ($matriz as $fila) {
    
    echo "INSERT INTO TablaA (cod_conduc, nom_conduc, dir_conduc,age_conduc) VALUES ( ".$fila['cod_conduc'].", ".$fila['nom_conduc'].",".$fila['dir_conduc'].",".$fila['age_conduc']." )<br>";

    
}



