<?php
    if(!is_numeric($numero1) ){
        $msg.= "voce informou o paramentro numero1 invalido";
    }
    if($msg != ""){
        echo $msg;
        exit;
    }

    $tabuada = 0;
    $i = 0;

    for($tabuada>=0 || $tabuada<=10;$i++){
        echo("sao elas"+($tabuada*$i));
    }