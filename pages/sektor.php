<div class="<?php $namasektor ?>">
    <div class="list">
        <div class="judul-sektor">
            <h1><?php $namasektor ?></h1>
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

        $daftar = array(new SektorItem(0, "A", "Halo Halo", "A", "Lokasi"),
            new SektorItem(1, "B", "Halo Halo", "B", "Lokasi"),
            new SektorItem(2, "C", "Halo Halo", "C", "Lokasi"));

        foreach ($daftar as $sektor) {
            echo "
            <li><a>$sektor->judul</a></li>
            ";
        }
       

        ?>
        </ul>
    </div>
    <div class="konten-submenu">
        <?php
            
        ?>
    </div>
</div>