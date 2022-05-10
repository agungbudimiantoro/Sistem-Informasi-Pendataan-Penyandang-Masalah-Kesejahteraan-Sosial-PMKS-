<?php

function checkBox($nilai)
{
    $jumlah = count($nilai);
    $alasan = array();
    for ($i = 0; $i < $jumlah; $i++) {
        $alasan[] = $nilai[$i];
    }
    return $alasan;
}

function fungsiDisabled($p, $hasil)
{
    if ($p == 'subjek_views') {
        echo " $hasil";
    };
};
