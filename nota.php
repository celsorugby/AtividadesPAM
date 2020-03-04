<?php

if( 
    !isset($_REQUEST["numero1"])      || 
          $_REQUEST["numero1"]  >0 && <=10  ||
    !isset($_REQUEST["numero2"])     || 
          $_REQUEST["numero2"]  >0 && <=10  ||
    !isset($_REQUEST["numero3"])      || 
          $_REQUEST["numero3"]  >0 && <=10  ||
    !isset($_REQUEST["numero4"])      || 
          $_REQUEST["numero4"]  >0 && <=10 
){
    
    echo"paramentros inválidos. Não da para fazer a conta";
    exit;
}
    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];
    $numero3 = $_REQUEST['numero3'];
    $numero4 = $_REQUEST['numero4'];

    $msg = "";

    if(!is_numeric($numero1) ){
        $msg.= "voce informou o paramentro numero1 invalido";
    }
    
    if(!is_numeric($numero2) ){
        $msg.= "voce informou o paramentro numero2 invalido";
    }
    if(!is_numeric($numero3) ){
        $msg.= "voce informou o paramentro numero3 invalido";
    }
    if(!is_numeric($numero4) ){
        $msg.= "voce informou o paramentro numero4 invalido";
    }

    if($msg != ""){
        echo $msg;
        exit;
    }
    


    $resultado = ($numero1 + $numero2 + $numero3 + $numero4)/4;
   

    $resposta["total"] = $resultado;

    

    if($resultado > 0 && $resultado <= 2){
        $resposta["$resposta"]= "Muito Ruim";
    }elseif($resultado >  2 && $resultado <= 5 ){
        $resposta["Nota"]= "Ruim";
    }elseif($resultado > 5 && $resultado < 7 ){
        $resposta["Nota"]= "Regular";
    }elseif($resultado >= 7 && $resultado <= 9 ){
        $resposta["Nota"]= "Bom";
    }elseif($resultado > 9 && $resultado <= 10 ){
        $resposta["Nota"]= "Muito Bom";
    }elseif($resultado  > 10 ){
        $resposta = "Valor invalido" ;
    }else{
        $resposta["Nota"] = "N.A";
    }

    echo json_encode($resposta);
?>