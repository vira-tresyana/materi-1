<?php

include "Animal.php"; 


class Hewan
{
	public $momo, $doggo, $zya, $masha, $bisa_terbang;

	public function bersuara(){
		return "Hewan Ini Bersuara : ";
	} 
}


class Kucing extends Hewan
{
	public $bisa_terbang = "Hewan ini tidak bisa terbang";

	public function bersuara()
	{
		return "Meoww";
	}
}


class Anjing extends Hewan
{
	
	public $bisa_terbang = "Hewan ini tidak bisa terbang";

	public function bersuara()
	{
		return "Guk Guk";
	}
}

class Elang extends Hewan
{
	public $bisa_terbang = "Hewan ini bisa terbang";
	
	public function bersuara()
	{
		return "Miippp";
	}
}



class Angsa extends Hewan
{
	public $bisa_terbang = "Hewan ini bisa terbang";
	
	public function bersuara()
	{
		return "kwaaakk";
	}
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo Adalah Kucing";
echo $momo->jumlah_kaki.;
echo $momo->bisa_terbang.;
$momo->bersuara()."<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing";
echo $doggo->jumlah_kaki.;
echo $doggo->bisa_terbang;
$doggo->bersuara().;

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo $zya->jumlah_kaki."<br>";

$masha = new Elang;
$masha->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo $zya->bisa_terbang.<br>";
$zya->bersuara()."<br>";

echo "<hr>";
echo $masha->jumlah_kaki."<br>";
echo $masha->bisa_terbang.<br>";
$zya->bersuara()."<br>";














