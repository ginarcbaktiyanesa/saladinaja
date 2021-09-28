<?php 
    $query = $this->db->get('bahan');
    $bahan = $query->result();
?>

<div class="content-wrapper">
    <section class="content">

    <!-- buat detail menu -->
    <?php foreach($menu as $mn) { ?>
        <form action="<?php echo base_url().'bahan/tambah'; ?>" method="post">

        <div class="form-group">
            <label>Kode Menu</label>
            <input type="text" name="KodeMenu" class="form-control" value="<?php echo $mn->KodeMenu ?>" readonly> 
        </div>
    <?php } ?>

    <div class="form-group">
            <label>Nama Bahan</label>
            <select class="form-control" name="KodeBahan">
                <?php foreach($bahan as $bhn){ ?>
                <option  value="<?php echo $bhn->KodeBahan; ?>"><?php echo $bhn->NamaBahan; ?></option>
                <?php } ?>
            </select>
    </div>
        <a href="<?php echo base_url('menu/index') ?>" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
    </section>
</div>