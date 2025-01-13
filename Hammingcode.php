<?php



function HammingCode($data)
{
    $bit = str_split($data);

    $d1 = (int)$bit[0];
    $d2 = (int)$bit[1];
    $d3 = (int)$bit[2];
    $d4 = (int)$bit[3];


    $p1 = $d1 + $d2 + $d4;
    $p1 = $p1 % 2 == 0 ? 0 : 1; // mengecek ganjil atau genap
    //  $p1 = $d1 xor $d2 xor $d4;

    $p2 = $d1 + $d3 + $d4;
    $p2 = $p2 % 2 == 0 ? 0 : 1;
    // $p2 = $d1 xor $d3 xor $d4;

    $p3 = $d2 + $d3 + $d4;
    $p3 = $p3 % 2 == 0 ? 0 : 1;
    // $p3 = $d2 xor $d3 xor $d4;

    // echo "{$p1}{$p2}{$p3}" //ngawur;

    $paritas = "{$p1}{$p2}{$p3}";

    $word = "{$p1}{$p2}{$d1}{$p3}{$d2}{$d3}{$d4}";

    echo  "Bitparitas: $paritas" . PHP_EOL;
    echo "Word yang Terkirim: $word" . PHP_EOL;

}


$hamming = HammingCode("0110");

