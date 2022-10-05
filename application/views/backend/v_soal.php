<!-- Content Row -->
    <div class="row">

       <!-- Begin Page Content -->
       <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Soal Dan Jawaban</h1>
                    

<!-- Soal dan Jawaban -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <br>
    <a href="<?= base_url('soal/tambah'); ?>" class="btn btn-primary">Tambah Soal</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 3%;">No</th>
                        <th>gambar</th> 
                        <th>Keterangan</th>
                        <th>Jawaban</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($soal as $row) {
                    ?>

                    <tr>
                        <td><?= ++$start; ?></td>
                        <td><img src="<?= base_url('assets/foto/'.$row['foto']) ?>" width="100px" height="100px"></td>
                        <td><?= $row['keterangan'] ;?></td>
                        <td><?= $row['jawaban'] ;?></td>
                        
                        <td>
                            <!-- <a href="<?= base_url('soal/detail/').$row['id_soal'];?>" class="btn btn-success">Edit</a> -->
                            <a href="<?= base_url('soal/edit/').$row['id_soal'];?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('soal/hapus/').$row['id_soal'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
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

         



       