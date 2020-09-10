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

class BMW extends Mobil{

}

class Tesla extends Mobil{
	function selfParking(){
		echo "Parkir Sendiri";

	}
}

$bmw = new BMW;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280/h";

$tesla = new Tesla;
$tesla->merk = "Tesla";
$tesla->tipe = "Model X";
$tesla->mesin = "2000cc";
$tesla->max_speed = "280/h";

 echo $tesla->kecepatanMaksimal();




