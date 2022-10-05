<!-- tampilan jawab soal -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/b5/css/')?>bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Membaca</title>
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>HASIL QUIZ</h1>
  
  <p></p> 
        
</div>
<div class="card text-center">
  <div class="card-header">
  <span>
    <!-- memmunculkan nama -->
   <h3>Nama : <?= $nama; ?></h3> 
  </span> 
  </div> 
  <!-- proses hitung score -->
  <?php
    $jumlah_soal = 10;
    $score = 100 / $jumlah_soal * $jumlah_benar;
    $hasil	=number_format($score,2);

  ?>

<div class="row">
<!-- jawaban benar -->
<div class="col-sm-4">
  <div class="card-body">
    <h5 class="card-title">JAWABAN BENAR</h5>
    <h1 class="card-text"><?= $jumlah_benar ;?></h1>    
  </div>  
</div>
<!-- end jawaban benar -->

<!-- jawaban salah -->
<div class="col-sm-4">
  <div class="card-body">
    <h5 class="card-title">JAWABAN SALAH</h5>
    <h1 class="card-text"><?= $jumlah_salah ;?></h1>    
  </div>  
</div>
<!-- end jawaban salah -->

<!-- score -->
<div class="col-sm-4">
  <div class="card-body">
    <h5 class="card-title">SCORE</h5>
    <h1 class="card-text"><?= $score ;?></h1>
  </div>
</div>
<!-- end score -->

  </div>
</div>
<br>
<div class="text-center">

  <form action="<?= base_url('home/jawab_aksi') ?>" method="post">
    <input type="hidden" name="nama" value="<?= $data['nama'] = ($_POST['nama']);	?>" >
    <input type="hidden" name="hasil" value="<?= $score ;?>" >]
    <button type="submit" class="btn btn-success">Ulangi</button>
  </form>

 
  

</div>
  
</div>

</div>

</body>
</html>
<script src="<?= base_url('assets/b5/js/bootstrap.js')?>"></script>