<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Halaman Produk</title>

    <link rel="canonical" href="https://getbootstrap.comexamples/pricing/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="assets/img/favicons/manifest.json">
<link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
  background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

    </style>

  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Pemesanan Kamar Hotel Sederhana</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="produk.php">Produk</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="daftar_harga.php">Daftar Harga</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="tentang_kami.php">Tentang Kami</a>
        <a class="py-2 text-dark text-decoration-none" href="pesan_kamar.php">Pesan Kamar</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pemesanan Kamar</h1>
    </div>
  </header>
        
<form method="post" action="proses/anggota-input-proses.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" id="nama">
    </div>
  </div>

  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki-laki">
        <label class="form-check-label" for="gridRadios1">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan">
        <label class="form-check-label" for="gridRadios2">
          Perempuan
        </label>
      </div>
    </div>
  </fieldset>
  
  <div class="row mb-3">
    <label for="InputEmail3" class="col-sm-2 col-form-label">Nomor Identitas</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="no_id" id="no_id">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tipe</label>   
    <div class="col-sm-10">
      <div class="form-group">  
        <select class="form-control" name="tipe" id="tipekamar" >
        <option value="">-- Silahkan Pilih Tipe --</option>
        <option value="Standar">Standar</option>
        <option value="Deluxe">Deluxe</option>
        <option value="Family">Family</option>
      </select>
      </div>
    </div>
  </div>
  

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="harga" id="harga">
    </div>
  </div>


  <!-- Tanggal pemesanan -->
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal pemesan</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tanggal" id="tanggal">
    </div>
  </div>

   <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Durasi Menginap</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="durasi" id="durasi">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Termasuk Breakfast</label>
    <div class="col-sm-10">
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Yes">
      <label for="vehicle1"> Yes </label><br>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Total Bayar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="total" id="total">
    </div>
  </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" onclick="hitungBayar()" >Hitung</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" value="simpan">Simpan</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" >Cancel</button>
</form>


<script src="assets/js/jquery-3.6.0.js" > </script>
<script>
$('#tipekamar').on('change', function() {

  var nilai = this.value;

  console.log(nilai);

  if(nilai == 'Standar') {
    $("#harga").val("500000");
  }
  if(nilai == 'Deluxe') {
    $("#harga").val("1000000");
  }
  if(nilai == 'Family') {
    $("#harga").val("1500000");
  }

})

function hitungBayar(){
  const harga = Number(document.getElementById("harga").value)
  const durasi = Number(document.getElementById("durasi").value)

  var breakfast = document.getElementById("vehicle1").value;

  console.log(breakfast);

  if (breakfast == "Yes") {
    var fee = Number(80000);
  }

  else {
    var  fee = Number(0);

  }

  if (durasi <3 ) {
    var diskon = 10; 
  }

  else {
    var diskon = 0;
  }
  console.log();

  let total = harga * durasi + fee;

  document.getElementById("total").value = total
}

</script>



</body>

</html>