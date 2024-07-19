<?php
include "proses/connect.php";
$query= mysqli_query ($conn,"SELECT * FROM tb_fasilities");
while ($record = mysqli_fetch_array($query)) {
  $result[] = $record ;
}
?>
<div class="col-lg-9 mt-2">
  <!...carousel ...>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/foto/1.png" class="img-fluid" style="height: 300px; width:1000px; object-fit:cover" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/foto/2.png" class="img-fluid" style="height: 300px; width:1000px; object-fit:cover" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/foto/3.png" class="img-fluid" style="height: 300px; width:1000px; object-fit:cover" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/foto/4.png" class="img-fluid" style="height: 300px; width:1000px; object-fit:cover" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/foto/5.png" class="img-fluid" style="height: 300px; width:1000px; object-fit:cover" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/foto/7.png" class="img-fluid" style="height: 300px; width:1000px; object-fit:cover" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="card mt-4 border-0 bg-light">
  <div class="card-body text-center">
    <h3 class="card-title">Fasilities</h3>
</div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="assets/foto/1.png" class="img-fluid" style="height: 200px; width:1000px; object-fit:cover" alt="...">
      <div class="card-body">
        <h5 class="card-title">Restaurant</h5>
        <p class="card-text">Ciptakan selera makan anda dengan mencicipi makanan yang lezat di La Luna Hotel, Dimulai dengan sarapan prasmanan setiap pagi, Restaurant yang kasual menawarkan santapan sepanjang hari yang memadukan makanan khas lokal dengan hidangan Asia.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/foto/2.png" class="img-fluid" style="height: 200px; width:1000px; object-fit:cover" alt="...">
      <div class="card-body">
        <h5 class="card-title">Swimming Pool</h5>
        <p class="card-text">Bersantai dan meremajakan diri di kolam renang berpemanas La Luna Hotel, sempurna untuk berenang menyegarkan dengan pemandangan menakjubkan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/foto/3.png" class="img-fluid" style="height: 200px; width:1000px; object-fit:cover" alt="...">
        <h5 class="card-title mt-3">Fitness Center</h5>
        <p class="card-text">Ikuti rutinitas olahraga Anda dan nikmati akses gratis ke ruang kebugaran lengkap, yang terletak di sebelah kolam renang. Sepeda juga tersedia jika Anda ingin bersepeda ke pantai.</p>
      </div>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card mt-3 h-100">
      <img src="assets/foto/4.png" class="img-fluid" style="height: 200px; width:1000px; object-fit:cover" alt="...">
      <div class="card-body">
        <h5 class="card-title">SPA</h5>
        <p class="card-text">Manjakan diri anda dengan produk alami terbaik untuk relaksasi yang menenangkan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-3 h-100">
      <img src="assets/foto/5.png" class="img-fluid" style="height: 200px; width:1000px; object-fit:cover" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sauna</h5>
        <p class="card-text">Manjakan diri Anda di Sauna kami, nikmati relaksasi saat Anda menginap di La Luna Hotel</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-3 h-100">
      <img src="assets/foto/7.png" class="img-fluid" style="height: 200px; width:1000px; object-fit:cover" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ruang Serbaguna</h5>
        <p class="card-text">Kami memiliki tempat yang sempurna bagi Anda mengadakan pesta resepsi pribadi atau pertemuan. Kami menawarkan 17 ruang pertemuan yang berbeda yang dapat mengakomodasi mulai dari 10 tamu sampai dengan 1,800 tamu, dan dapat diatur dengan konfigurasi yang berbeda-beda sesuai dengan kebutuhan Anda.</p>
      </div>
    </div>
</div>