<?php

class Mobil {
	private  $merk, $tipe, $display, $ram, $harga;

	public function cetakTipe(){
		return $this->tipe;
	}
	public function kecepatanmaksimal(){
		return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
	}

	function injekGas(){
		return "mengalirkan bensin ke ruang bakar, rpm naik, roda berputar";

	}
}

class BMW extends Mobil{

}

class Tesla extends Mobil{
	function selfParking(){
		echo "Parkir Sendiri";

	}

	function injekGas(){
		return parent ::injekGas();
		return "mengalirkan listrik ke dinamo, rpm naik, roda berputar";
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

 echo "BMW : ".$bmw->injekGas();
 echo "<br>";
 echo "<br>";
 echo "Tesla :".$tesla->injekGas();




