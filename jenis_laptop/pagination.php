<?php

$cuy = mysqli_connect('localhost', 'root', '', 'peminjaman');

$euy = "SELECT * FROM borrow";

$sql = mysqli_query($cuy, $euy);

$jumlah_pinjam = mysqli_num_rows($sql);

$total = 16;

$tersedia = $total - $jumlah_pinjam;
?>

<style>
.pagi{
          margin-top: 200px;
          margin-left: 200px;
        }

.cardCuy{
      position: absolute;
      margin-top: 490px;
}

.card-text-cuy{
  font-size: 19px;
}

.card-link{
  font-size: 20px;
}
</style>

<div class="pagi">
              <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link">Pilih Merek Disini</a>
    </li>
    <li class="page-item"><a class="page-link" href="lohnopo.php">Lenovo</a></li>
    <li class="page-item"><a class="page-link" href="pacer.php">Acer</a></li>
    <li class="page-item"><a class="page-link" href="oasis.php">ASUS</a></li>
    <li class="page-item"><a class="page-link" href="ehape.php">HP</a></li>
    <li class="page-item">

    </li>
  </ul>
</nav>
</div>

<div class="cardCuy col-md-8" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-text-cuy"><span class="text-primary"> <?php echo $jumlah_pinjam ?> </span>Laptop yang sedang dipinjam</h4>
    <h4 class="card-text-cuy"> <span class="text-primary"> <?php echo $tersedia ?> </span>Laptop yang tersedia</h4>
    <h4 class="card-text-cuy"> <span class="text-primary"> <?php echo $total ?> </span>Total Laptop</h4>
    <a href="../dipinjam.php" class="card-link " style="text-decoration: none;">Periksa</a>
  </div>
</div>



