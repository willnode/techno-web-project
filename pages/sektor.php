
<?php
 $menuaktif=2;
 include "pages/menu.php";
 $db = mysqli_connect('localhost','root','','informasi');
 ?>
<div class="content sektor <?php echo $namasektor ?>">
    <div class="list">
        <ul>

<?php
    $judul = mysqli_query($db,"SELECT * FROM $namatabel;");
    $sektorterpilih = null;
    while($juduls = mysqli_fetch_array($judul)){
        $aktif = $juduls['id'] == $_GET['id'];
        $sektorclass = $aktif ? " active" : "";
        if ($aktif) {
            $sektorterpilih = $juduls;
        }
        ?>

        <li class='submenu<?=$sektorclass?>'><a href='index.php?page=<?=$_GET['page']?>&amp;id=<?=$juduls['id']?>'><?=$juduls['judul']?></a></li>
        <?php
    }
?>
        </ul>
    </div>
    <div class="konten-submenu">
        <?php if ($sektorterpilih !== null) { ?>
            <div class='gambar' style='background-image:url("images/<?=$sektorterpilih['gambar']?>")'>
            </div>
            <div class='inner'>
                <h2><?=$sektorterpilih['judul']?></h2>
                <p class='article'><?=$sektorterpilih['artikel']?></p>
                <p class='lokasi'><a target="_blank" rel="noreferrer" title="<?=$sektorterpilih['lokasi']?>" href="https://maps.google.com/?q=<?=$sektorterpilih['lokasi']?>">Lihat Lokasi >></a></p>
            </div>
        <?php } ?>
    </div>
</div>