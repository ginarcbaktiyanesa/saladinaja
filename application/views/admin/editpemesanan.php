<?php 
    $query = $this->db->get('pegawai');
    $pegawai = $query->result();
    $query = $this->db->get('kurir');
    $kurir = $query->result();
?>

<div class="content-wrapper">
    <section class="content">
        <?php foreach($pemesanan as $pesanan) { ?>

        <form action="<?php echo base_url().'pemesanan/update'; ?>"
        method="post">

        <div class="form-group">
            <label>No Pemesanan</label>
            <input type="text" name="NoPemesanan" class="form-control" value="<?php echo $pesanan->NoPemesanan ?>" readonly> 
        </div>

        <div class="form-group">
            <label>Nama Pemesan</label>
            <input type="text" name="NamaPemesan" class="form-control" value="<?php echo $pesanan->NamaPemesan ?>" readonly>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="Alamat" class="form-control" value="<?php echo $pesanan->Alamat ?>" readonly>
        </div>
        
        <div class="form-group">
            <label>Nohp</label>
            <input type="text" name="Nohp" class="form-control" value="<?php echo $pesanan->Nohp ?>" readonly>
        </div>

        <div class="form-group">
            <label>Jenis Pembayaran</label>
            <input type="text" name="JenisPembayaran" class="form-control" value="<?php echo $pesanan->JenisPembayaran ?>" readonly> 
        </div>
        
        <div class="form-group">
            <label>Total Bayar</label>
            <input type="text" name="TotalBayar" class="form-control" value="<?php echo $pesanan->TotalBayar ?>" readonly>
        </div>

        <div class="form-group">
            <label>Status Pesanan</label>
            <input type="text" name="StatusPesanan" class="form-control" value="<?php echo $pesanan->StatusPesanan ?>" readonly>
        </div>

        <div class="form-group">
            <label>No Rekening</label>
            <input type="text" name="NoRekening" class="form-control" value="<?php echo $pesanan->NoRekening ?>" readonly>
        </div>

        <div class="form-group">
            <label>ID Pegawai</label>
            <select class="form-control" name="IdPegawai">
                <?php foreach($pegawai as $pgw){ ?>
                <option  value="<?php echo $pgw->IdPegawai; ?>"><?php echo $pgw->IdPegawai; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>ID Kurir</label>
            <select class="form-control" name="IdKurir">
                <?php foreach($kurir as $kr){ ?>
                <option  value="<?php echo $kr->IdKurir; ?>"><?php echo $kr->IdKurir; ?></option>
                <?php } ?>
            </select>
        </div>


        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>