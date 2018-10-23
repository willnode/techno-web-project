
<?php
 $menuaktif=3;
 include "pages/menu.php";
 $db = mysqli_connect('localhost','root','','informasi');
 ?>

<div class="content galeri">
<?php

class GaleriItem
{
    public $link;
    public $gambar;
    public $alt;

    function __construct($tabel, $id, $judul, $gambar)
    {
		$this->link = "index.php?page=$tabel&id=$id";
        $this->gambar = $gambar;
        $this->alt = $judul;
    }
}

$galeries = array();

foreach (array('kerajinan', 'kuliner', 'budaya') as $tabel) {
	$items = mysqli_query($db,"SELECT * FROM $tabel;");
    while($item = mysqli_fetch_array($items)){
		$galeries[] = new GaleriItem($tabel, $item['id'], $item['judul'], $item['gambar']);
	}
}

	foreach ($galeries as $img) {
	?>
	<div class="item">
		<div class="image" style='background-image:url("images/<?=$img->gambar?>")'>
		<a href="<?=$img->link?>"><?=$img->alt?></a>
	</div>
	</div>
	<?php
	}
?>

 </div>