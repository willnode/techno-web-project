<?php include ('koneksi.php');

    if(isset($_GET['edit'])) {
        // Edit
        $id=$_GET['edit'];

        $rec=mysqli_query($db, "SELECT * FROM budaya WHERE id=$id");
        $record=mysqli_fetch_array($rec);
        $judul=$record['judul'];
        $artikel=$record['artikel'];
        $edit_state = true;
    } else {
        // Buat baru
        $query = "SELECT MIN(t1.id + 1) AS nextID
        FROM budaya t1
           LEFT JOIN budaya t2
               ON t1.id + 1 = t2.id
        WHERE t2.id IS NULL";
        $id = mysqli_fetch_array(mysqli_query($db, $query))[0];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../a.css" />
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

                <th colspan="2">AKSI</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_array($results)) {?>
            <tr>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['gambar']; ?></td>
                <td><?= $row['artikel']; ?></td>
                <td>
                    <a href="budaya.php?edit=<?= $row['id']; ?>">Edit</a>
                </td>
                <td>
                    <a href="budaya-proses.php?del=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <form method="post" enctype="multipart/form-data" action="budaya-proses.php" >
            <input type="text" name="id" placeholder="Masukkan ID" hidden value="<?= $id ?>">

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
            <input type="text" name="artikel" placeholder="Masukkan Artikel" value="<?= $artikel; ?>">
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