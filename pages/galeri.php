
<?php
 $menuaktif=3;
 include "pages/menu.php"
 ?>

 <div class="galeri">
<?php
	$galeries = ['budaya.jpg', 'kerajinan.jpg', 'kuliner.jpg', 'budaya.jpg'];

	foreach ($galeries as $img) {
	?>
	<div class="item">
		<div class="image" style='background-image:url("images/<?=$img?>")'>
		</div>
	</div>
	<?php
	}
?>

 </div>