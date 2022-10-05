<!-- tampilan registrasi -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6   col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-4">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-6">Silahkan Registrasi</h1>
                                        <br>
                                    </div>
                                    <!-- pesan registrasi-->
                                    <?php
                                    if ( $this->session->flashdata('success')) {
                                    ?>
                                        <h3 class="text-success text-center"><?php echo $this->session->flashdata('success'); ?> </h3>
                                    <?php
                                    }
                                    ?>
                                    <!-- end pesan -->

                                    <!-- form registrasi -->
                                    <form class="user" method="post" action="<?= base_url('login/registerNow'); ?>">
                                        <!-- nama lengkap -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Masukan Nama Lengkap" name="nama_lengkap" required >
                                        </div>
                                        <!-- end nama lengkap -->
                                        <!-- email -->
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" placeholder="Masukan E-mail" name="email" required>
                                        </div>
                                        <!-- end email -->
                                        <!-- username -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Masukan Username" name="username" required>
                                        </div>
                                        <!-- end username -->
                                        <!-- password -->
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Password" name="password" required>
                                        </div>
                                        <!-- end password -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block"> Registrasi</button>
                                        <a href="<?= base_url('login') ?>" type="submit" class="btn btn-success btn-user btn-block"> Kembali</a>
                                        
                                        <hr>
                                 
                                    </form>
                                    <!-- end form registrasi -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/')?>js/sb-admin-2.min.js"></script>

</body>

</html>