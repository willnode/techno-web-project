<?php

$db = mysqli_connect('localhost','root','','informasi');

if (isset($_POST['save'])) {
    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $gambar=$_FILES['gambar'];
    $gambar_file = $gambar['name'];
    $gambar_path = "images/".$gambar_file;
    $gambar_tmp = $gambar['tmp_name'];
    $artikel=$_POST['artikel'];

    // Upload gambar
    if(move_uploaded_file($gambar_tmp, $gambar_path)) {
        $query = "INSERT INTO budaya (id, judul, gambar, artikel) VALUES ('$id', '$judul', '$gambar_file', '$artikel')";
        mysqli_query($db, $query) or die($koneksi->error);;
    }
}


if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $artikel=$_POST['artikel'];

    mysqli_query($db, "UPDATE budaya SET judul='$judul', gambar='$gambar', artikel='$artikel' WHERE id=$id");

}

if (isset($_GET['del'])) {
    $id=$_GET['del'];
    mysqli_query($db, "DELETE FROM budaya WHERE id=$id");
}

header('Location: budaya.php');


?>