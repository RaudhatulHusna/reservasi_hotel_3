<?php
include "proses/connect.php";
$query= mysqli_query ($conn,"SELECT * FROM tb_daftar_menu");
while ($record = mysqli_fetch_array($query)) {
  $result[] = $record ;
}
?>
<div class="col-lg-9 mt-2">
<div class="card">
  <div class="card-header">
    Halaman Menu
  </div>
  <div class="card-body">
    <div class ="row">
    <div class="col d-flex justify-content-end">
    <button class="btn btn-primary"data-bs-toggle="modal" data-bs-target=#ModalTambahUser> Tambah Menu</button>
</div>
</div>
<!-- Modal Tambah User Baru -->
<div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-fullsc">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<div class="modal-body">
<form class="needs-validaton" novalidate action="proses/proses_tambah_menu.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-6">
      <div class="input-group mb-3">
  <input type="file" class="form-control py-3" id="uploadfoto" placeholder="Nama Anda" name="foto"required>
  <label class="input-group-text" for="uploadfoto">Upload Foto Kamar</label>
  <div class="invalid-feedback">
        Masukkan Foto Kamar
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Tipe Kamar" name="Tipe kamar"required>
  <label for="floatingInput">Tipe Kamar</label>
  <div class="invalid-feedback">
        Masukkan Tipe Kamar
      </div>
</div>
</div>
</div>
<div class="row">
      <div class="col-lg-12">
      <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="keterangan"   name="Keterangan">
  <label for="floatingPassword">Keterangan</label>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="Harga" name="harga" required>
  <label for="floatingInput">Harga</label>
 <div class="invalid-feedback">
  Masukkan Harga Kamar
</div>
</div>
</div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Tambah User Baru -->
 <?php
foreach ($result as $row){
  ?>
<!-- Modal View-->
<div class="modal fade" id="Modalview<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="needs-validation" novalidate="proses/proses_tambah_menu.php" method="POST">
    <div class="row">
      <div class="col-lg-6">
      <div class="form-floating mb-3">
  <input disabled type="text" class="form-control" id="floatingInput" placeholder="Nama Anda" name="nama"value="<?php echo $row['nama']?>">
  <label for="floatingInput">Nama</label>
  <div class="invalid-feedback">
        Masukkan nama anda
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"value="<?php echo $row['username']?>">
  <label for="floatingInput">Username</label>
  <div class="invalid-feedback">
        Masukkan Username anda
      </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-lg-6">
  <div class="form-floating mb-3">
  <select disabled class="form-select" arial-label="Default select example" name="level" id="">
  <?php
  $data = array("Admin", "Resepsionis", "Pelayan", "Pengunjung");
  foreach($data as $key => $value){
    if($row['level']== $key+1){
      echo "<option selected  value = '$key'>$value</option>";
    }else{
      echo "<option value='$key'>$value</option>";
    }
  }
  ?>
  </select>
<label for="floatingInput">Level User"</label>
<div class="invalid-feedback">
        Pilih level anda
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp']?>">
  <label for="floatingInput">No HP</label>
 
</div>
</div>
</div>
<div class="form-floating">
  <textarea disabled class="form-control" name="" id="" style="height:100px" name="Alamat"><?php echo $row['alamat']?></textarea>
  <label for="floatinginput">Alamat</label>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal View-->

<!-- Modal Edit-->
<div class="modal fade" id="Modaledit<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="needs-validation" novalidate="proses/proses_edit_user.php" method="POST">
        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
    <div class="row">
      <div class="col-lg-6">
      <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Nama Anda" name="nama"required value="<?php echo $row['nama']?>">
  <label for="floatingInput">Nama</label>
  <div class="invalid-feedback">
        Masukkan nama anda
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"required value="<?php echo $row['username']?>">
  <label for="floatingInput">Username</label>
  <div class="invalid-feedback">
        Masukkan Username anda
      </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-lg-6">
  <div class="form-floating mb-3">
    <select class="form-select" arial-label="Default select example" name="level" id="">
  <?php
  $data = array("Admin", "Resepsionis", "Pelayan", "Pengunjung");
  foreach($data as $key => $value){
    if($row['level']== $key+1){
      echo "<option selected  value = '$key'>$value</option>";
    }else{
      echo "<option value='$key'>$value</option>";
    }
  }
  ?>
  </select>
<label for="floatingInput">Level User"</label>
<div class="invalid-feedback">
        Pilih level anda
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp']?>">
  <label for="floatingInput">No HP</label>
 
</div>
</div>
</div>
<div class="form-floating">
  <textarea class="form-control" name="" id="" style="height:100px" name="Alamat"><?php echo $row['alamat']?></textarea>
  <label for="floatinginput">Alamat</label>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345">Save changes</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Edit-->

<!-- Modal Delete-->
<div class="modal fade" id="Modaldelete<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="needs-validation" novalidate="proses/proses_edit_user.php" method="POST">
        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
    <div class="row">
      <div class="col-lg-6">
      <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Nama Anda" name="nama"required value="<?php echo $row['nama']?>">
  <label for="floatingInput">Nama</label>
  <div class="invalid-feedback">
        Masukkan nama anda
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"required value="<?php echo $row['username']?>">
  <label for="floatingInput">Username</label>
  <div class="invalid-feedback">
        Masukkan Username anda
      </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-lg-6">
  <div class="form-floating mb-3">
    <select class="form-select" arial-label="Default select example" name="level" id="">
  <?php
  $data = array("Admin", "Resepsionis", "Pelayan", "Pengunjung");
  foreach($data as $key => $value){
    if($row['level']== $key+1){
      echo "<option selected  value = '$key'>$value</option>";
    }else{
      echo "<option value='$key'>$value</option>";
    }
  }
  ?>
  </select>
<label for="floatingInput">Level User"</label>
<div class="invalid-feedback">
        Pilih level anda
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp']?>">
  <label for="floatingInput">No HP</label>
 
</div>
</div>
</div>
<div class="form-floating">
  <textarea class="form-control" name="" id="" style="height:100px" name="Alamat"><?php echo $row['alamat']?></textarea>
  <label for="floatinginput">Alamat</label>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345">Save changes</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Delete-->
 <?php 
}
 if(empty($result)) {
  echo "Data user tidak ditemukan";
 }else{

 ?>
<div class="tabel-responsive">

  <table class="table table-hover">
  <thead>
    <tr class="text-nowrap">
      <th scope="col">No</th>
      <th scope="col">foto kamar</th>
      <th scope="col">Tipe kamar</th>
      <th scope="col">keterangan</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($result as $row){
    ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td>
        <div style = "width:100px">
    </div>
      <img src="assets/img/<?php echo $row['Foto'] ?>"class="img-thumbnail" alt="..."></td>
      <td><?php echo $row['Tipe kamar'] ?></td>
      <td><?php echo $row['Keterangan'] ?></td>
      <td><?php echo $row['Harga'] ?></td>
      <td>
        <div class="d-flex">
        <button class ="btn btn-info btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye-fill"></i></button>
        <button class ="btn btn-warning btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></button>
        <button class ="btn btn-danger btn-sm"data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i class="bi bi-trash3"></i></button>
    </div>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
<?php
 }
?>
  </div>
</div>
</div>

<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>


