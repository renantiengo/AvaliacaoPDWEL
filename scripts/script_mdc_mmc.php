<?php

    $n = $_GET['numero1'];
    $m = $_GET['numero2'];
    $anterior = $n;
    $atual = $m;
    $resto = $anterior % $atual;
	$mmc = $m;

    if($n < $m){		
        echo('Insira o maior número primeiro');
    }
	
    else{
        while($resto != 0){
            $anterior = $atual;
            $atual = $resto;
            $resto = $anterior % $atual;
        }
        for ($i=2; $i<$m; $i++){
        
            if (($n%$i == 0) && ($m%$i == 0)){
                $mmc = $i; break;
            }        
        }
            
        echo('MDC: '.$atual.'  // MMC: '.$mmc);
    }
	
?>