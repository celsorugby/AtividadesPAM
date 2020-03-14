<?php
    if( 
        !isset($_REQUEST["tabuada"])
    ){
        echo"paramentros inválidos. Não da para fazer a conta";
        exit;
    }else{
        $tabuada = $_REQUEST['tabuada'];
    }

    if(!is_numeric($numero1) ){
        $msg.= "voce informou o paramentro numero1 invalido";
    }
    if($msg != ""){
        echo $msg;
        exit;
    }

    $tabuada = 0;

    for($tabuada>=0 || $tabuada<=10;i++){
        echo("sao elas"+($tabuada*i));
    }