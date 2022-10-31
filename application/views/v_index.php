<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


     <!-- Bootsrap Icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

     <!-- Style css -->
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Tugas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Tambah Data</a>
        <!-- <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a> -->
      </div>
      <a class="nav-link ms-auto" href="#">MOH ERVIN ARVIANDI</a>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->


<!-- Header -->
<div class="container pt-5">
<div class="header alert alert-info">
  <h2 class="text-center">Moh Ervin Arviandi/1901040018</h2>
</div>
</div>
<!-- Akhir Header -->


<!-- Card -->
<div class="container">
<div class="card ">
  <h5 class="card-header">Data Mahasiswa</h5>
  <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pahrul irfan</td>
      <td>20020123992</td>
      <td>Mataram</td>
      <td>
        <a href="" class="btn btn-warning "><i class="bi bi-pencil-square me-2"></i>Edit</a>
        <a href="" class="btn btn-danger"><i class="bi bi-trash me-2"></i>Delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Moh Ervin Arviandi</td>
      <td>1901040018</td>
      <td>Mataram</td>
      <td>
        <a href="" class="btn btn-warning"><i class="bi bi-pencil-square me-2"></i>Edit</a>
        <a href="" class="btn btn-danger"><i class="bi bi-trash me-2"></i>Delete</a>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</div>
<!-- Akhir Card -->
    

 <!-- Bootstrap Js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>