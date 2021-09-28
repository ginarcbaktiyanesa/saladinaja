<div class="content-wrapper">
    <section class="content">
        <h4><strong>RINCIAN BAHAN</strong></h4>

        <?php echo $this->session->flashdata('message'); ?>
        <section class="content">
        <a class="btn btn-primary" href="<?= base_url('bahan/add/'.$detail['KodeMenu'])?>"><i class="fa fa-plus"></i><span>Tambah Data Bahan</span></a>
        <div class="navbar-form navbar-right">

        <table class="table">
            <tr>
                <th>Kode Menu</th>
                <td><?php echo $detail['KodeMenu'] ?></td>
            </tr>
            <tr>
                <th>Nama Menu</th>
                <td><?php echo $detail['NamaMenu'] ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><?php echo $detail['HargaMenu'] ?></td>
            </tr>
            <tr>
                <th>Stok</th>
                <td><?php echo $detail['Stok'] ?></td>
            </tr>
            <tr>
                <th>Gambar</th>
                <td><img src="<?php echo base_url(); ?>assets/gambar/<?php echo $detail['Gambar'] ?>"width="130" height="100"></td>
            </tr>
        </table>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Kode Bahan</th>
                <th>Nama Bahan</th>
                <th>Aksi</th>
                <!-- <th>Kuantitas</th>  -->
            </tr>
            <?php 
            
            $no = 1;
            $i=0;
            while($i<count($detail)-5) { 
                $query = $this->db->get_where('bahan', array('KodeBahan' => $detail[$i]['KodeBahan']))->row_array();    
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $query['KodeBahan'] ?></td>
                <td><?php echo $query['NamaBahan'] ?></td>
                <!-- <td><?php echo anchor('bahan/edit/'.$query['KodeBahan'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>Ubah</td> -->
                <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Bahan ini?')"><?php echo anchor('bahan/hapus/'.$query['KodeBahan'],
                 '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>Hapus</td>
            </tr>
            
            
            <?php $i++; } ?> 
            

        </table>
        <a href="<?php echo base_url('menu/index') ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>