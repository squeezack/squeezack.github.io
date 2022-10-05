<!-- tampilan evaluasi -->

<!doctype html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>EVALUASI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/bt5')?>/dist/css/bootstrap.min.css" rel="stylesheet">
  

  </head>
  <body>
  <section class="vh-100" style="background-color: lightblue;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            
            
              <div class="card-body p-2 p-lg-5 text-black">
                <!-- form nama -->
                <form method="POST" action="<?= base_url('home/soal') ?>" >

                  <div class="d-flex align-items-center mb-4 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Masukan Nama</span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" name="submit" value="Mulai" type="submit"></input>
                    <!-- tutup form nama -->
                    
                    <!-- link login -->
                    <a href="<?= base_url('login') ?>" class="btn btn-success btn-lg btn-block">Login</a>
                  </div>

                </form>

                

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<?= base_url('assets/bt5/')?>/dist/js/bootstrap.bundle.min.js"></script>

      
</body>
</html>