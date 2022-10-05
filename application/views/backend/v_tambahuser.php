<!-- Content Row -->
<div class="row">
</div>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah User </h6>
    </div>
    <div class="card-body">

        

        <?php echo form_open_multipart('user/tambah_aksi');  ?>
            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="textarea" name="nama_lengkap" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" required>                
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required>                
            </div>
            
           
            <button type="submit" class="btn btn-primary" value="submit">Simpan Soal</button>
            <a href="<?= base_url('user');?>" class="btn btn-danger">Kembali</a>
        
        <?php echo form_close(); ?>

                                    
    </div>
</div>
    

