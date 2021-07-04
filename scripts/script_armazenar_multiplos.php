<?php

	$array = [];
    $n = $_POST['numero1'];
    $m = $_POST['numero2'];    


    for ($i=1; $i<=$m; $i++){
        $array[] = $i * $n;
    }
	
    print_r($array);
	
?>