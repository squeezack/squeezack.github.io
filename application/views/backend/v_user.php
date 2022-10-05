<!-- Content Row -->
    <div class="row">

       <!-- Begin Page Content -->
       <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Users</h1>
                    

<!-- Soal dan Jawaban --> 
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <br>
    <a href="<?= base_url('user/tambah'); ?>" class="btn btn-primary">Tambah User</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 3%;">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th> 
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($user as $row) {
                    ?>


                    <tr>
                        <td><?= ++$start; ?></td>
                        <td><?= $row['nama_lengkap'] ;?></td>
                        <td><?= $row['username'] ;?></td>
                        <td><?= $row['email'] ;?></td>
                        
                        
                        <td>
                            <!-- <a href="<?= base_url('user/detail/').$row['id'];?>" class="btn btn-success">Edit</a> -->
                            <a href="<?= base_url('user/edit/').$row['id'];?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('user/hapus/').$row['id'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                        </td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
           <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

    </div>

         



       