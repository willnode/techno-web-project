<?php

class Sektor {

	var $judul;
	var $gambar;
	var $submenu;

	function __construct($judul, $gambar, $submenu=[])
	{
		$this->judul = $judul;
		$this->gambar = $gambar;
		$this->submenu = $submenu;
	}
}

class Submenu {
	var $judul;
	var $deskripsi;
	var $lokasi;

}

$kerajinan = new Sektor("Kerajinan", "images/kerajinan.jpg");
$kuliner = new Sektor("Kuliner", "images/kuliner.jpg");
$budaya = new Sektor("Budaya", "images/budaya.jpg");

$myObj = new stdClass();
$myObj->judul = "Sistem Informasi Perkonomian Bangkalan";

$myObj->kategori = array( $kerajinan, $kuliner, $budaya);

$myJSON = json_encode($myObj, JSON_PRETTY_PRINT);

echo $myJSON;
?>