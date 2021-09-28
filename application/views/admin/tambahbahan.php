<div class="content-wrapper">
    <section class="content">

    <form action="<?php echo base_url().'bahan/tambah_bahan'; ?>"  method="post">
    <!-- buat detail menu -->
    <!-- <?php foreach($menu as $mn) { ?>
        <form action="<?php echo base_url().'bahan/tambah'; ?>" method="post">

        <div class="form-group">
            <label>Kode Menu</label>
            <input type="text" name="KodeMenu" class="form-control" value="<?php echo $mn->KodeMenu ?>" readonly> 
        </div>
    <?php } ?> -->
    

        <div class="form-group">
            <label>Kode Bahan</label>
            <input type="text" name="KodeBahan" class="form-control"> 
        </div>

        <div class="form-group">
            <label>Nama Bahan</label>
            <input type="text" name="NamaBahan" class="form-control">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
    </section>
</div>