<?php

class Mobil {
	public $merk, $tipe, $display, $ram, $harga;

	public function cetakTipe(){
		return $this->tipe;
	}
	function kecepatanmaksimal(){
		return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
	}
}


$bmw = new Mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280/h";

$bmw2 = new Mobil;
$bmw2->merk = "BMW";
$bmw2->tipe = "320i";
$bmw2->mesin = "2000cc";
$bmw2->max_speed = "280/h";

echo "$bmw2->tipe";
echo "<br>";
echo "$bmw->tipe";

if($bmw === $bmw2){
	echo "sama";
}else{
	echo "tidak";
}




