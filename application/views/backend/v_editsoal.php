<!-- Content Row -->
<div class="row">
</div>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Soal </h6>
    </div>
    <div class="card-body">
        <?php foreach($soal as $row) { ?>
        <form action="<?= base_url('soal/edit_aksi');?>" method="post">
            <input type="hidden" name="id" value="<?= $row->id_soal ?>">
           
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?= $row->keterangan ?>">                
            </div>
            <div class="form-group">
                <label for="">A</label>
                <input type="text" name="a" class="form-control" value="<?= $row->a ?>">                
            </div>
            <div class="form-group">
                <label for="">B</label>
                <input type="text" name="b" class="form-control" value="<?= $row->b ?>">                
            </div>
            <div class="form-group">
                <label for="">C</label>
                <input type="text" name="c" class="form-control" value="<?= $row->c ?>">                
            </div>
            <div class="form-group">
                <label for="">D</label>     
                <input type="text" name="d" class="form-control" value="<?= $row->d ?>">                
            </div>
            <div class="form-group">
                <label for="jawaban">Jawaban</label>
                    <select class="form-control" name="jawaban" id="jawaban">
                        <option value="<?= $row->jawaban ?>"><?= $row->jawaban ?></option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Masukan Gambar</label>
                <input type="file" class="form-control-file" id="gambar">
            </div>

            <button type="submit" class="btn btn-primary" value="submit">Update Soal</button>
            <a href="<?= base_url('soal');?>" class="btn btn-danger">Kembali</a>
        </form>
        <?php } ?>

                                    
    </div>
</div>
    

