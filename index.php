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

echo " Tipe ".$bmw->kecepatanMaksimal();


