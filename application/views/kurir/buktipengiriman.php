<div class="content-wrapper">
    <section class="content">
    <?php echo form_open_multipart('pengiriman/update'); ?>
        <?php foreach($pemesanan as $pesanan) { ?>

        <div class="form-group">
            <label>No Pemesanan</label>
            <input type="text" name="NoPemesanan" class="form-control" value="<?php echo $pesanan->NoPemesanan ?> "readonly> 
        </div>

        <div class="form-group">
            <label>Nama Pemesan</label>
            <input type="text" name="NamaPemesan" class="form-control" value="<?php echo $pesanan->NamaPemesan ?>"readonly>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="Alamat" class="form-control" value="<?php echo $pesanan->Alamat ?>"readonly>
        </div>

        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="Nohp" class="form-control" value="<?php echo $pesanan->Nohp ?>"readonly>
        </div>

        <div class="form-group">
            <label>Total Bayar</label>
            <input type="text" name="TotalBayar" class="form-control" value="<?php echo $pesanan->TotalBayar ?>"readonly>
        </div>

        <div class="form-group">
            <label>Status</label>
            <input type="text" name="StatusPesanan" class="form-control" value="<?php echo $pesanan->StatusPesanan ?>"readonly>
        </div>

        <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="Foto" class="form-control" value="<?php echo $pesanan->Foto ?>">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin melakukan konfirmasi data ini?')">Simpan</button>
        <?php echo form_close(); ?>
        <?php } ?>
    </section>
</div>