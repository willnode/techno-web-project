<div class="menu-container">
<?php
if (!isset($menuaktif))
	$menuaktif = -1;

function activ($idx)
{
	global $menuaktif;
	return $menuaktif==$idx ? 'class="active"' : '';
}

?>
<ul class="menu-atas">
	<li <?= activ(0) ?>>
		<a href="." class="menu-item">Beranda</a>
	</li>
	<li <?= activ(1) ?>>
		<a href="index.php?page=profil" class="menu-item">Profil</a>
	</li>
	<li <?= activ(2) ?>>
		<a href="#" class="menu-item"><?= isset($namasektor) ? $namasektor : "Kategori" ?></a>
		<div class="menu-content">
			<a href="index.php?page=kerajinan&amp;id=0">Kerajinan</a>
			<a href="index.php?page=kuliner&amp;id=0">Kuliner</a>
			<a href="index.php?page=budaya&amp;id=0">Budaya</a>
		</div>
	</li>
	<li <?= activ(3) ?>>
		<a href="index.php?page=galeri" class="menu-item">Galeri</a>
		<!---->
	</li>
	<li <?= activ(4) ?>>
		<a href="index.php?page=tentang" class="menu-item">Tentang</a>
		<!---->
	</li>
</ul>
</div>
