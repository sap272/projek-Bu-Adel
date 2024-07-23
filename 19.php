<?php 
function tambah($satu,$dua){
    $hasil = $satu + $dua;
    echo $hasil;
}

tambah(6,10);
echo "<br>";
tambah(100,99);


function tambah($satu,$dua){
    $hasil = $satu + $dua;
    return $hasil;
}

$a = tambah(6,10);
echo $a;

function tambah($satu,$dua){
    $hasil = $satu + $dua;
    return $hasil;
}
$a = tambah(6,10);
$b = tambah($a,9);

echo $b;

function tambah($satu,$dua){
    $hasil = $satu + $dua;
    return $hasil;
}

echo tambah(5,7);
echo "<br>";

echo "Hasil dari 6 + 9 adalah: ". tambah(6,9);
echo "<br>";
echo tambah(99,1).", Bisa didapat dari 99 + 1";


function tambah($satu,$dua){
    $hasil = $satu + $dua;
    return $hasil;
    echo "Kalimatini tidak akan pernah dijalankan...";
}
echo tambah(5,7);
?>