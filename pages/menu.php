<div class="menu-container">
<?php if (isset($menutitle)) {?>
	<div class="menu-title">
		<h1><?= $menutitle ?></h1>
</div>
<?php }?>
<ul class="menu-atas">
	<li>
		<img src="icon/beranda.png" class="menu-icon">
		<a href="." class="menu-item">Beranda</a>
	</li>
	<li>
		<img src="icon/profil.png" class="menu-icon">
		<a href="index.php?page=profil" class="menu-item">Profil</a>
	</li>
	<li>
		<img src="icon/kategori.png" class="menu-icon">
		<a href="#" class="menu-item">Kategori</a>
		<div class="menu-content">
			<a href="index.php?page=kerajinan&amp;id=0">Kerajinan</a>
			<a href="index.php?page=kuliner&amp;id=0">Kuliner</a>
			<a href="index.php?page=budaya&amp;id=0">Budaya</a>
		</div>
	</li>
	<li>
		<img src="icon/galeri.png" class="menu-icon">
		<a href="index.php?page=galeri" class="menu-item">Galeri</a>
		<!---->
	</li>
	<li>
		<img src="icon/tentang.png" class="menu-icon">
		<a href="index.php?page=tentang" class="menu-item">Tentang</a>
		<!---->
	</li>
</ul>
</div>
