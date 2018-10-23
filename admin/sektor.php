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
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css" />
    <script src="main.js"></script>
</head>
<body>

<?php if (isset($_SESSION['msg'])) ?>
    <table>
        <thead>
            <tr>
                <th>JUDUL</th>
		        <th>GAMBAR</th>
		        <th>ARTIKEL</th>
		        <th>LOKASI</th>

                <th colspan="2">AKSI</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_array($results)) {?>
            <tr>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['gambar']; ?></td>
                <td><?= limit_text($row['artikel'], 3); ?></td>
                <td><?= $row['lokasi']; ?></td>
                <td>
                    <a href="<?=$tabel?>.php?edit=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="sektor-proses.php?del=<?= $row['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <form method="post" enctype="multipart/form-data" action="sektor-proses.php" >
        <input type="text" name="id"  hidden value="<?= $id ?>">
        <input type="text" name="tabel" hidden value="<?= $tabel ?>">

		<div class="input-group">
            <label>Judul</label>
            <input type="text" name="judul" placeholder="Masukkan Judul" value="<?= $judul; ?>">
        </div>
        <div class="input-group">
            <label>Gambar</label>
            <input type="file" name="gambar" placeholder="Masukkan Gambar">
        </div>
		<div class="input-group">
            <label>Artikel</label>
            <textarea name="artikel" placeholder="Masukkan Artikel"><?= $artikel; ?></textarea>
        </div>
        <div class="input-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi" placeholder="Masukkan Lokasi" value="<?= $lokasi; ?>">
        </div>
        <div class="input-group">
        <?php if($edit_state == false): ?>
            <button type="submit" name="save" class="btn">Save</button>
        <?php else : ?>
            <button type="submit" name="update" class="btn">Update</button>
        <?php endif ?>
        </div>
    </form>
</body>
</html>