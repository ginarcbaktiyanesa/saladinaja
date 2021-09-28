<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Konfirmasi Pengiriman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <table class="table">
            <tr>
                <th>No</th>
                <th>No Pemesanan</th>
                <th>Nama Pemesan</th>
                <th>Alamat</th>
                <th>No Hp</th> 
                <th>Total Bayar</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php 
            
            $no = 1;
            foreach($pemesanan as $pesanan) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pesanan->NoPemesanan ?></td>
                <td><?php echo $pesanan->NamaPemesan ?></td>
                <td><?php echo $pesanan->Alamat ?></td>
                <td><?php echo $pesanan->Nohp ?></td>
                <td><?php echo $pesanan->TotalBayar ?></td>
                <td><?php echo $pesanan->StatusPesanan ?></td>
                <td><img src="<?php echo base_url(); ?>assets/Foto/<?php echo $pesanan->Foto; ?>"width="120" height="100"></td>
                <td><a href="<?php echo base_url('Pengiriman/edit/'
                 .$pesanan->NoPemesanan)?>">Konfirmasi</a></td>
            </tr>
                <?php echo form_close(); ?>
            <?php endforeach; ?>
        </table>
      </section>
</div>
