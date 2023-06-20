<?php
    $alasan = $_GET['alasan'];
    $server = mysqli_connect("localhost","root","","peminjaman");
 
    $sql = "DELETE FROM borrow WHERE alasan = '$alasan'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "<script>
        alert('Berhasil di kembalikan!')
        </script>";
        header("location: dipinjam.php");
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }
?>