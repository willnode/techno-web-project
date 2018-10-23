<?php

$db = mysqli_connect('localhost','root','','informasi');
$tabel = $_POST['tabel'];

if (isset($_POST['save'])) {
    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $lokasi=$_POST['lokasi'];
    $gambar=$_FILES['gambar'];
    $gambar_file = $gambar['name'];
    $gambar_path = "../images/".$gambar_file;
    $gambar_tmp = $gambar['tmp_name'];
    $artikel=$_POST['artikel'];

    // Upload gambar
    if(move_uploaded_file($gambar_tmp, $gambar_path)) {
        $query = "INSERT INTO $tabel (id, judul, gambar, artikel, lokasi) VALUES ('$id', '$judul', '$gambar_file', '$artikel', '$lokasi')";
        mysqli_query($db, $query) or die($koneksi->error);
    } else {
        die("Error");
    }
}


if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $artikel=$_POST['artikel'];

    mysqli_query($db, "UPDATE $tabel SET judul='$judul', gambar='$gambar', artikel='$artikel' WHERE id=$id");

}

if (isset($_GET['del'])) {
    $id=$_GET['del'];
    mysqli_query($db, "DELETE FROM $tabel WHERE id=$id");
}

header("Location: $tabel.php");


?>