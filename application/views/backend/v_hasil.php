<!-- Content Row -->
    <div class="row">

       <!-- Begin Page Content -->
       <div class="container-fluid">
 
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Hasil Evaluasi</h1>
<div class="card-header py-3">
    <a href="<?= base_url('hasil/pdf'); ?>" class="btn btn-primary">Export</a>
    </div>                    

<!-- Soal dan Jawaban --> 
<div class="card shadow mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 3%;">No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Hasil</th>
                        <th>Soal</th>
                        <th>Jawaban Anak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($hasil as $row) {
                    ?>


                    <tr>
                        <td><?= ++$start; ?></td>
                        <td><?= $row['tanggal'] ;?></td>
                        <td><?= $row['nama'] ;?></td>
                        <td><?= $row['hasil'] ;?></td>
                        <td><?= $row['soal'] ;?></td>
                        <td><?= $row['jawaban_anak'] ;?></td>
                        
                        <td>
                            
                            <a href="<?= base_url('hasil/hapus/').$row['id_jawaban'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
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

         



       