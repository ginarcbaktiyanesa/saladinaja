<div class="content-wrapper">
    <section class="content">

        <?php echo form_open_multipart('menu/tambah'); ?>

        <div class="form-group">
            <label>Kode Menu</label>
            <input type="text" name="KodeMenu" class="form-control"> 
        </div>

        <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" name="NamaMenu" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga Menu</label>
            <input type="text" name="HargaMenu" class="form-control">
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="Stok" class="form-control">
        </div>

        <div class="form-group">
            <label>Upload Gambar</label>
            <input type="file" name="Gambar" class="form-control">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <!-- </form> -->
        <?php echo form_close(); ?>
    </section>
</div>