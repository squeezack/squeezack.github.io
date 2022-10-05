<!-- Content Row -->
<div class="row">
</div>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Soal </h6>
    </div>
    <div class="card-body">

        <!-- <form action="<?= base_url('soal/tambah_aksi');?>" method="post"> -->
        <?php echo form_open_multipart('soal/tambah_aksi');  ?>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="">A</label>
                <input type="text" name="a" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="">B</label>
                <input type="text" name="b" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="">C</label>
                <input type="text" name="c" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="">D</label>
                <input type="text" name="d" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="jawaban">Jawaban</label>
                    <select class="form-control" name="jawaban" id="jawaban">
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Masukan Gambar</label>
                <input type="file" class="form-control-file" name="foto" id="foto">
            </div>

            <button type="submit" class="btn btn-primary" value="submit">Simpan Soal</button>
            <a href="<?= base_url('soal');?>" class="btn btn-danger">Kembali</a>
        
        <?php echo form_close(); ?>

                                    
    </div>
</div>
    

