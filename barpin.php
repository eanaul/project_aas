<?php
$conn = mysqli_connect('localhost', 'root', '', 'peminjaman');



if(isset($_POST['iya'])){
    $jenis = $_POST['jem'];
    $alasan = $_POST['alasan'];
    $tanggal = date('Y-m-d H:i:s');

    


    $sql = "INSERT INTO borrow (`jenis`, `alasan`, `tanggal`) VALUES ('$jenis', '$alasan', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Berhasil di daftar!')
        </script>";
        header("location: dipinjam.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // $qry = mysqli_query($conn, $sql);
}