<?php include "pages/menu.php" ?>
<div class="profil">
<h1 class="judul-depan">Profil Bangkalan</h1>
    <ul>

    <?php

        class LamanProfil {
            public $id;
            public $judul;
            public $gambar;
            public $artikel;

            function __construct($id, $judul, $gambar, $artikel) {
                $this->id = $id;
                $this->judul = $judul;
                $this->gambar = $gambar;
                $this->artikel = $artikel;
            }
        }

        $daftar = array(
            new LamanProfil(0, "Kerajinan", "kerajinan.jpg", "Lorem Ipsum"),
        );

		$odd = 0;

        foreach ($daftar as $item) { ?>
            <li class='section'>

				<?php if ((++$odd) % 2 == 0) { ?>
				<div class='gambar' style='background-image:url("images/<?=$item->gambar?>")'></div>
				<?php } ?>

				<div class='inner'>
					<h3><?= $item->judul?></h3>
					<div class='desc'><p><?= $item->artikel?></p></div>
				</div>

				<?php if ($odd % 2 == 1) { ?>
				<div class='gambar' style='background-image:url("images/<?=$item->gambar?>")'></div>
				<?php } ?>

			</li>
        <?php } ?>
    </ul>
</div>
