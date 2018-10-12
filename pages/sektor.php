<div class="<?php echo $namasektor ?>">
    <div class="list">
        <div class="judul-sektor">
            <h1><?php echo $namasektor ?></h1>
        </div>
        <ul>
        <?php

        class SektorItem {
            public $id;
            public $gambar;
            public $artikel;
            public $judul;
            public $lokasi;

            function __construct($id, $judul, $gambar, $artikel, $lokasi) {
                $this->id = $id;
                $this->gambar = $gambar;
                $this->artikel = $artikel;
                $this->judul = $judul;
                $this->lokasi = $lokasi;
            }
        }

        $daftar = array(new SektorItem(0, "A", "Halo Halo", "A", "Singa Arabia Bangkalan"),
            new SektorItem(1, "B", "Halo Halo", "B", "Oriez Cafe Bangkalan"),
            new SektorItem(2, "C", "Halo Halo", "C", "Universitas Trunojoyo Madura"));

        $selectedid = isset($_GET['id']) ? $_GET['id'] : -1;
        $sektorterpilih = NULL;

        foreach ($daftar as $sektor) {
            $issame = $sektor->id == $selectedid;
            if ($issame)
                $sektorterpilih = $sektor;

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
        <?php
             if($sektorterpilih !== NULL)
             {
                $encodedmap = rawurlencode($sektorterpilih->lokasi);

                echo "
                <h2>$sektorterpilih->judul</h2>
                <p class='article'>$sektorterpilih->artikel</p>
                <img src='$sektorterpilih->gambar'>
                <iframe id='map' allowfullscreen src='https://maps.google.com/maps?q=$encodedmap&z=15&ie=UTF8&iwloc=&output=embed'></iframe>
                ";
             }
        ?>
    </div>
</div>