<?php 

function ErrorCorret($data){
    if(strlen($data) != 7 ){
        echo "data lebit dari 7 bit".PHP_EOL;
       $data = readline("masukan lagi");
    }

    $bit = str_split($data);

    $bit1 = (int)$bit[0];
    $bit2 = (int)$bit[1];
    $bit3 = (int)$bit[2];
    $bit4 = (int)$bit[3];
    $bit5 = (int)$bit[4];
    $bit6 = (int)$bit[5];
    $bit7 = (int)$bit[6];

    $p1 = $bit1 + $bit3 + $bit5 + $bit7;
    $p1 = $p1 % 2 == 0 ? 0 : 1;

    $p2 = $bit2 + $bit3 + $bit6 + $bit7;
    $p2 = $p2 % 2 == 0 ? 0 : 1;

    $p3 = $bit4 + $bit5 + $bit6 + $bit7;
    $p3 = $p3 % 2 == 0 ? 0 : 1;

    $word = "{$bit1}{$bit2}{$bit3}{$bit4}{$bit5}{$bit6}{$bit7}";

    echo "Word diterima: $word".PHP_EOL;
    
    $arrayData = [$bit1,$bit2,$bit3,$bit4,$bit5,$bit6,$bit7];

    $posisiError = 0;

    if ($p1 == 1) $posisiError += 1; 
    if ($p2 == 1) $posisiError += 2;  
    if ($p3 == 1) $posisiError += 4;  
    
    if($posisiError == 0){
        echo "*** TRANSMISSION SUCCESS ***".PHP_EOL;
    }else{
        echo "*** TRANSMISSION ERROR ***".PHP_EOL;
        $arrayData[$posisiError - 1] = $arrayData[$posisiError - 1] ? 0 : 1;
         
        echo "Word diterima seharusnya: ";
        foreach($arrayData as $bit){
            echo $bit."";
        }
    }
}

ErrorCorret("0011100");
