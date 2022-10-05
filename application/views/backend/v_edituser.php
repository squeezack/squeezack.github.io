<!-- Content Row -->
<div class="row">
</div>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit User </h6>
    </div>
    <div class="card-body">
        <?php foreach($user as $row) { ?>
        <form action="<?= base_url('user/edit_aksi');?>" method="post">
            <input type="hidden" name="id" value="<?= $row->id ?>">
            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="textarea" name="nama_lengkap" class="form-control" value="<?= $row->nama_lengkap ?>">                
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" value="<?= $row->username ?>">                
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" value="<?= $row->password ?>">                
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?= $row->email ?>">                
            </div>
            

            <button type="submit" class="btn btn-primary" value="submit">Update User</button>
            <a href="<?= base_url('user');?>" class="btn btn-danger">Kembali</a>
        </form>
        <?php } ?>

                                    
    </div>
</div>
    

