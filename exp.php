<?php 

$posisiError = 2;

$arrayData= [];

        $bits = str_split("0111000");

        foreach($bits as $bit){
            $arrayData[] = $bit;
        }

        $arrayData[$posisiError - 1] = $arrayData[$posisiError - 1] ? 0 : 1;
    
            echo "Word diterima seharusnya: ";
            foreach ($arrayData as $bit) {
                echo $bit . "";
            }
