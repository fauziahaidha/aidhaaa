<?php
    include "koneksi.php";
    session_start();

    $albumid=$_GET['komentarid'];

    $sql=mysqli_query($conn,"delete from komentar where albumid='$komentarid'");

    header("location:komentar.php");
?>