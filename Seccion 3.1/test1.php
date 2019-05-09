<?php

$matriz = [array('cod_conduc' => '95070234', 'nom_conduc'=>'Conductor 1', 'dir_conduc'=>'calle 44 NRO. 6N -50',
'age_conduc'=> '34'), array('cod_conduc' => '5656768', 'nom_conduc'=>'Conductor 2', 'dir_conduc'=>'cra 78A NRO. 8 -12',
'age_conduc'=> '37')];


foreach ($matriz as $fila) {
    
    echo "INSERT INTO TablaA (cod_conduc, nom_conduc, dir_conduc,age_conduc) VALUES ( ".$fila['cod_conduc'].", ".$fila['nom_conduc'].",".$fila['dir_conduc'].",".$fila['age_conduc']." )<br>";

    
}



