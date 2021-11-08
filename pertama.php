<?php

echo "Mari belajar PHP<br>";
echo "Bersama Mas Bayu<br>";

$a=8;
$b=4;
$f=10;
$g=6;
echo "Nilai dari variabel a adalah ".$a."<br>";
echo "Nilai dari variabel b adalah ".$b."<br>";
$c=$a+$b;
$d=$a*$b;
$e=$a/$b;
echo "Nilai dari ".$a."+".$b."=".$c."<br>";
echo "Nilai dari ".$a."x".$b."=".$d."<br>";
echo "Nilai dari ".$a.":".$b."=".$e."<br>";

$nilai=4;
if ($nilai>=7) {
	echo "Nilai Sempurna";
} elseif($nilai>=5) {
	echo "Nilai Cukup";
} else {
	echo "Nilai Kurang";
}
echo "<br>";

function kurangi($w,$s){
	$subs=$w-$s;
	echo "Nilai dari ".$w."-".$s."=".$subs."<br>";
}
function modulus($p,$t){
	$mod=$p%$t;
	echo "Nilai dari ".$p."%".$t."=".$mod."<br>";
}

kurangi($a,$b);
kurangi($f,$g);
kurangi($g,$b);
kurangi($b,$f);
modulus($a,$b);
modulus($g,$b);
?>