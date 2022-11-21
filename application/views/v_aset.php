<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


      <!-- MY FONTS -->
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;300;400;500;600;700;800&family=Inter:wght@200;300;400;500&family=Kanit:wght@200;300;400;500;600;700&family=Lato:wght@300;400;700;900&family=Orbitron:wght@400;500;700;800;900&family=Oswald:wght@200;400&family=Poppins:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Tampil Data</title>
</head>


<style>
  body {
    font-family: "Roboto", sans-serif;
  }

  .card {
    margin-top: 120px;
  }
</style>
<body>
<!-- <div class="container">
<h2 class="alert alert-info mt-5 mb- text-center">Moh Ervin Arviandi/1901040018</h2>
</div> -->

<!-- Form -->
<div class="container">
    <a href="<?=site_url('AsetController/tambah')?>" class="mb-3 float-end btn btn-success">Tambah Data</a>

<div class="card">
    <div class="card-header">
    Data Mahasiswa Teknik
  </div>
  <div class="card-body">
  <table class="table table-bordered table-dark table-striped table-hover">
    <thead class="table table-primary">
      <tr class="text-center">
        <th>Id</th>
        <th>nama_aset</th>
        <th>jenis</th>
        <th>lokasi</th>
        <th>jumlah</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $id = 1;
      foreach ($jumlah as $item) {
      ?>


      <tr>
        <td> <?php echo $id++ ?></td>
        <td> <?php echo $item->nama_aset ?></td>
        <td> <?php echo $item->jenis ?></td>
        <td> <?php echo $item->lokasi ?></td>
        <td> <?php echo $item->jumlah ?></td>
      </tr>

      <?php
     }
      ?>
    </tbody>
  </table>
</div>
</div>
</div>
<!-- Akhir Form -->


<!-- <div class="workingspace">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div> -->


    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>