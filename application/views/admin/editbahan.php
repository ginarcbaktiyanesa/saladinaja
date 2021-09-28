<div class="content-wrapper">
    <section class="content">
        <?php foreach($bahan as $bhn) { ?>

        <form action="<?php echo base_url().'bahan/update'; ?>" method="post">

        <div class="form-group">
            <label>Kode Bahan</label>
            <input type="text" name="KodeBahan" class="form-control" value="<?php echo $bhn->KodeBahan ?>"> 
        </div>

        <div class="form-group">
            <label>Nama Bahan</label>
            <input type="text" name="NamaBahan" class="form-control" value="<?php echo $bhn->NamaBahan ?>">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengubah data bahan ini?')">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>