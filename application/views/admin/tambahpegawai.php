<div class="content-wrapper">
    <section class="content">

        <form action="<?php echo base_url().'pegawai/tambah'; ?>"
        method="post">

        <div class="form-group">
            <label>ID Pegawai</label>
            <input type="text" name="IdPegawai" class="form-control"> 
        </div>

        <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" name="NamaPegawai" class="form-control">
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