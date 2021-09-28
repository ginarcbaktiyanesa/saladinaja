<div class="content-wrapper">
    <section class="content">
        <?php foreach($kurir as $kr) { ?>

        <form action="<?php echo base_url().'kurir/update'; ?>"
        method="post">

        <div class="form-group">
            <label>ID Kurir</label>
            <input type="text" name="IdKurir" class="form-control" value="<?php echo $kr->IdKurir ?>"> 
        </div>

        <div class="form-group">
            <label>Nama Kurir</label>
            <input type="text" name="NamaKurir" class="form-control" value="<?php echo $kr->NamaKurir ?>">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="Harga" class="form-control" value="<?php echo $kr->Harga ?>">
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="Username" class="form-control" value="<?php echo $kr->Username ?>">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="Password" class="form-control" value="<?php echo $kr->Password ?>">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengubah data kurir ini?')">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>