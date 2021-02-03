<?php
    include "koneksi.php";
    $npm = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM heny WHERE npm='$npm'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/norheny/data_mahasiswa.php'>";
?>