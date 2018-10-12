<div class="beranda">
    <h1 class="judul-depan">Sistem Informasi Perkonomian Bangkalan</h1>
    <ul class="tombol-depan">
    <?php

        class LamanBeranda {
            public $id;
            public $judul;
            public $gambar;
            public $artikel;

            function __construct($id, $judul, $gambar, $artikel, $link) {
                $this->id = $id;
                $this->judul = $judul;
                $this->gambar = $gambar;
                $this->artikel = $artikel;
                $this->link = $link;
            }
        }

        $daftar = array(
            new LamanBeranda(0, "Kerajinan", "images/kerajinan.jpg", "Lorem Ipsum", "index.php?page=kerajinan"),
            new LamanBeranda(0, "Kuliner", "images/kuliner.jpg", "Lorem Ipsum", "index.php?page=kuliner"),
            new LamanBeranda(0, "Budaya", "images/budaya.jpg", "Lorem Ipsum", "index.php?page=budaya"),
        );

        foreach ($daftar as $item) {
            echo "
            <li>
                <div>
                    <a href='$item->link'>
                    <img src='$item->gambar'>
                    <h3>$item->judul</h3>
                    <p>$item->artikel</p>
                    </a>
                </div>
            </li>";
        }
        ?>
    </ul>
</div>
