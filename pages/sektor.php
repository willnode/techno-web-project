
<?php
$menutitle = $namasektor;
 include "pages/menu.php"
 ?>
<div class="sektor <?php echo $namasektor ?>">
    <div class="list">
        <ul>
        <?php

class SektorItem
{
    public $id;
    public $gambar;
    public $artikel;
    public $judul;
    public $lokasi;

    function __construct($id, $judul, $gambar, $artikel, $lokasi)
    {
        $this->id = $id;
        $this->gambar = $gambar;
        $this->artikel = $artikel;
        $this->judul = $judul;
        $this->lokasi = $lokasi;
    }
}

$daftar = array(new SektorItem(0, "Anakonda", "kerajinan.jpg", "A", "Singa Arabia Bangkalan"),
    new SektorItem(1, "B", "a.jpg", "B", "Oriez Cafe Bangkalan"),
    new SektorItem(2, "C", "b.jpg", "C", "Universitas Trunojoyo Madura"));

$selectedid = isset($_GET['id']) ? $_GET['id'] : -1;
$sektorterpilih = null;

foreach ($daftar as $sektor) {
    $issame = $sektor->id == $selectedid;
    if ($issame) {
        $sektorterpilih = $sektor;
    }

    $sektorclass = $issame ? " active" : "";
    $page = $_GET['page'];
    echo "
        <li class='submenu$sektorclass'><a href='index.php?page=$page&id=$sektor->id'>$sektor->judul</a></li>
        ";
}

?>
        </ul>
    </div>
    <div class="konten-submenu">
        <?php if ($sektorterpilih !== null) {?>
            <div class='gambar' style='background-image:url("images/<?=$sektorterpilih->gambar?>")'>
            </div>
            <h2><?=$sektorterpilih->judul?></h2>
            <p class='article'><?=$sektorterpilih->artikel?></p>
            <p class='lokasi'<?=$sektorterpilih->lokasi?>></p>
        <?php }?>
    </div>
</div>