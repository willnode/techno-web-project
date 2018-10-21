<?php include "pages/menu.php" ?>
<div class="beranda">
    <h1 class="judul-depan">Sistem Informasi Perkonomian Bangkalan</h1>
    <ul class="tombol-depan">

    <?php

        class LamanBeranda {
            public $id;
            public $judul;
            public $gambar;
            public $artikel;
            public $link;

            function __construct($id, $judul, $gambar, $artikel, $link) {
                $this->id = $id;
                $this->judul = $judul;
                $this->gambar = $gambar;
                $this->artikel = $artikel;
                $this->link = $link;
            }
        }

        $daftar = array(
            new LamanBeranda(0, "Kerajinan", "kerajinan.jpg", "Lorem Ipsum", "index.php?page=kerajinan"),
            new LamanBeranda(0, "Kuliner", "kuliner.jpg", "Lorem Ipsum", "index.php?page=kuliner"),
            new LamanBeranda(0, "Budaya", "budaya.jpg", "Lorem Ipsum", "index.php?page=budaya"),
        );

        foreach ($daftar as $item) { ?>
            <li>
                <div>
                    <a href='<?= $item->link?>'>
                        <div class='gambar' style='background-image:url("images/<?=$item->gambar?>")'>
                            <div class='space'></div>
                            <div class='inner'>
                                <h3>
                                    <?= $item->judul?>
                                </h3>
                                <div class='desc'>
                                    <p><?= $item->artikel?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        <?php }  ?>
    </ul>
</div>
