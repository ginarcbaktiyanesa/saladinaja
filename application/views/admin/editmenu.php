<div class="content-wrapper">
    <section class="content">
    <?php echo form_open_multipart('menu/update'); ?>
        <?php foreach($menu as $mn) { ?>

        <div class="form-group">
            <label>Kode Menu</label>
            <input type="text" name="KodeMenu" class="form-control" value="<?php echo $mn->KodeMenu ?>"> 
        </div>

        <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" name="NamaMenu" class="form-control" value="<?php echo $mn->NamaMenu ?>">
        </div>

        <div class="form-group">
            <label>Harga Menu</label>
            <input type="text" name="HargaMenu" class="form-control" value="<?php echo $mn->HargaMenu ?>">
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="Stok" class="form-control" value="<?php echo $mn->Stok ?>">
        </div>

        <div class="form-group">
            <label>Upload Gambar</label>
            <input type="file" name="Gambar" class="form-control" value="<?php echo $mn->Gambar ?>">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengubah data menu ini?')">Simpan</button>
        <?php echo form_close(); ?>
        <?php } ?>
    </section>
</div>