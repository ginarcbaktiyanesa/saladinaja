<div class="content-wrapper">
    <section class="content">

        <form action="<?php echo base_url().'kurir/tambah'; ?>"
        method="post">

        <div class="form-group">
            <label>ID Kurir</label>
            <input type="text" name="IdKurir" class="form-control"> 
        </div>

        <div class="form-group">
            <label>Nama Kurir</label>
            <input type="text" name="NamaKurir" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="Harga" class="form-control">
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="Username" class="form-control">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="Password" class="form-control">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </section>
</div>