<?php

session_start();

$judul="";
$gambar="";
$artikel="";
$lokasi="";
$id = 0;
$edit_state = false;

$db = mysqli_connect('localhost','root','','informasi');

$results = mysqli_query ($db, "SELECT * FROM $tabel");

    if(isset($_GET['edit'])) {
        // Edit
        $id=$_GET['edit'];
        $rec=mysqli_query($db, "SELECT * FROM $tabel WHERE id=$id");
        $record=mysqli_fetch_array($rec);
        $judul=$record['judul'];
        $artikel=$record['artikel'];
        $lokasi=$record['lokasi'];
        $gambar=$record['gambar'];
        $edit_state = true;
    } else {
        // Buat baru
        $query = "SELECT MIN(t1.id + 1) AS nextID
        FROM $tabel t1
           LEFT JOIN $tabel t2
               ON t1.id + 1 = t2.id
        WHERE t2.id IS NULL";
        $id = mysqli_fetch_array(mysqli_query($db, $query))[0];
    }

    function limit_text($text, $limit) {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
      }

    function activ($test) {
        global $id;
        return $test == $id ? ' active' : '';
    }
?>

<div class="sektor">

<?php if (isset($_SESSION['msg'])) ?>

        <ul class="list">
        <?php while ($row = mysqli_fetch_array($results)) {?>
            <li>
                <a class="btn-edit<?=$row['id'] == $id ? ' active' : ''?>" href="index.php?page=<?=$tabel?>&amp;edit=<?= $row['id']; ?>" title="<?= limit_text($row['artikel'], 5); ?>"><?= $row['judul']; ?></a>
                <a class="btn-del" href="sektor-proses.php?tabel=<?=$tabel?>&amp;del=<?= $row['id']; ?>" title="Hapus">❌</a>
            </li>
        <?php } ?>
            <li>
                <a class="btn-edit<?=!$edit_state ? ' active' : ''?>" href="index.php?page=<?=$tabel?>" title="Tambah item baru...">➕ Tambah Baru</a>
            </li>
        </ul>

    <form class="form" method="post" enctype="multipart/form-data" action="sektor-proses.php" >
        <input type="text" name="id"  hidden value="<?= $id ?>">
        <input type="text" name="tabel" hidden value="<?= $tabel ?>">

		<div class="input-group">
            <label>Judul</label>
            <input required type="text" name="judul" placeholder="Masukkan Judul" value="<?= $judul; ?>">
        </div>
        <div class="input-group">
            <label>Gambar <i><?= $gambar ? '('.$gambar.')' : '' ?></i></label>
            <input required type="file" name="gambar" placeholder="Masukkan Gambar">
        </div>
		<div class="input-group">
            <label>Artikel</label>
            <textarea required name="artikel" placeholder="Masukkan Artikel"><?= $artikel; ?></textarea>
        </div>
        <div class="input-group">
            <label>Lokasi</label>
            <input required type="text" name="lokasi" placeholder="Masukkan Lokasi" value="<?= $lokasi; ?>">
        </div>
        <div class="input-group">
        <?php if($edit_state == false): ?>
            <button type="submit" name="save" class="btn">Save</button>
        <?php else : ?>
            <button type="submit" name="update" class="btn">Update</button>
        <?php endif ?>
        </div>
    </form>
</div>