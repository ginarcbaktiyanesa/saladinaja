<div class="content-wrapper">
    <section class="content">
        <?php foreach($pegawai as $pgw) { ?>

        <form action="<?php echo base_url().'pegawai/update'; ?>"
        method="post">

        <div class="form-group">
            <label>ID Pegawai</label>
            <input type="text" name="IdPegawai" class="form-control" value="<?php echo $pgw->IdPegawai ?>"> 
        </div>

        <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" name="NamaPegawai" class="form-control" value="<?php echo $pgw->NamaPegawai ?>">
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="Username" class="form-control" value="<?php echo $pgw->Username ?>">
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="Password" class="form-control" value="<?php echo $pgw->Password ?>">
        </div>

        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengubah data pegawai ini?')">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>