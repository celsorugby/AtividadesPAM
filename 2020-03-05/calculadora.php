<?php

if( 
    !isset($_REQUEST["numero1"]) || 
    !isset($_REQUEST["numero2"])  
    
){
    
    echo"paramentros inválidos. Não da para fazer a conta";
    exit;

}else{
    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];
}


    if(!is_numeric($numero1) ){
        $msg.= "voce informou o paramentro numero1 invalido";
    }
    
    if(!is_numeric($numero2) ){
        $msg.= "voce informou o paramentro numero2 invalido";
    }
    

    if($msg != ""){
        echo $msg;
        exit;
    }

    $resposta["total"] = $resultado;
    
    if($numero1+$numero2){
        $resposta["Soma"]= ($numero1+$numero2);
    }else if($numero1-$numero2){
        $resposta["Subtração"]= ($numero1-$numero2);
    }else if($numero1*$numero2){
        $resposta["Multiplicação"]= ($numero1*$numero2);
    }else if($numero1/$numero2){
        $resposta["Divião"]= ($numero1/$numero2);
        exit;
    }


    echo json_encode($resposta);
    