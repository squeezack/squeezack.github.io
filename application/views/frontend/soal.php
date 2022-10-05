
<!-- halaman soal -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>EVALUASI</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <!-- Bootstrap core CSS -->
<link href="<?= base_url('assets/bt5')?>/dist/css/bootstrap.min.css" rel="stylesheet">

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

      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/bt5/')?>carousel.css" rel="stylesheet">
  </head>
  <body>


 <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <!-- memanggil nama -->
      <a class="navbar-brand" href="#"> Nama : <?= $nama; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
    </div>
  </nav>
</header>

    


<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" >

    <div class="carousel-indicators">
      <!-- proses slide soal -->
      <?php 
      $i = 0;
        foreach ($soal as $row) { 
            $active = '';
            if ($i == 0){
                $active = 'active';
            }
        ?>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?= $i; ?>" class="<?= $active; ?>" aria-current="true" aria-label="Slide 1"></button>
      <?php $i++; }; ?>
      <!-- end proses slide soal -->
      
    </div>

   

    <div class="carousel-inner">
    <form action="<?= base_url('home/jawab_soal');?>" method="post">
    <input type="text" value="<?= $data['nama'] = ($_POST['nama']);	?>" name="nama" type="hidden">
    <!-- memunculkan soal -->
    <?php

      $i = 0;
        foreach ($soal as $key) {
            $active = '';
            if ($i == 0){
                $active = 'active';
            }

        ?>
      
      
      <div class="carousel-item <?= $active;?>">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
    

        <div class="container">
          <div class="carousel-caption text-caption">
           <p><img width="250px" src="<?= base_url('assets/foto/'.$key->foto) ;?>" alt="" srcset=""></p>
            <input class="form-check-input" type="hidden"  value="<?php echo $key->keterangan ?>" name="keterangan[<?php echo $key->id_soal?>]">


            <p>&nbsp;</p>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  value="a" name="pilihan[<?php echo $key->id_soal?>]">
                <label class="form-check-label"><?php print_r($key->a) ?></label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  value="b" name="pilihan[<?php echo $key->id_soal?>]">
                <label class="form-check-label"><?php print_r($key->b) ?></label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  value="c" name="pilihan[<?php echo $key->id_soal?>]">
                <label class="form-check-label"><?php print_r($key->c) ?></label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  value="d" name="pilihan[<?php echo $key->id_soal?>]"> 
                <label class="form-check-label"><?php print_r($key->d) ?></label>
            </div>



          </div>
        </div>

      </div>
      <?php $i++; }; ?>
      <!-- tutup soal -->
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon btn btn-primary btn-lg" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon btn btn-primary btn-lg" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>

<center><input type="submit" name="btn_hasil" value="Cek Jawaban" class="btn btn-success"></center>
 </form>  
</main>


    <script src="<?= base_url('assets/bt5/')?>/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
