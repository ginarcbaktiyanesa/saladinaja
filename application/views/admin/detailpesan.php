<div class="content-wrapper">
    <section class="content">
        <h4><strong>RINCIAN PESANAN</strong></h4>
        <br>
        <br>
        <table class="table">
            <tr>
                <th>No Pemesanan</th>
                <td><?php echo $detail['NoPemesanan'] ?></td>
            </tr>
            <tr>
                <th>Nama Pemesan</th>
                <td><?php echo $detail['NamaPemesan'] ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail['Alamat'] ?></td>
            </tr>
            <tr>
                <th>No Hp</th>
                <td><?php echo $detail['Nohp'] ?></td>
            </tr>
            <tr>
                <th>Total Bayar</th>
                <td><?php echo $detail['TotalBayar'] ?></td>
            </tr>
            <tr>
                <th>Status Pengiriman</th>
                <td><?php echo $detail['StatusPesanan'] ?></td>
            </tr>
        </table>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                <th>Jumlah</th>
                <!-- <th>Kuantitas</th>  -->
            </tr>
            <!-- <?php 
            
            $no = 1;
            $i=0;
            while($i<count($detail)-11) { 
                $query = $this->db->get_where('menu', array('KodeMenu' => $detail[$i]['KodeMenu']))->row_array();    
            ?> -->
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $query['KodeMenu'] ?></td>
                <td><?php echo $query['NamaMenu'] ?></td>
                <td><?php echo $detail[$i]['Jumlah'] ?></td>
            </tr>
            
            
            <!-- <?php $i++; } ?>  -->
            

        </table>
        <a href="<?php echo base_url('pemesanan/index') ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>