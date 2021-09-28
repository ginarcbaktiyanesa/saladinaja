<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pembayaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pembayaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
      <div class="navbar-form navbar-right">
        <?php echo form_open('pembayaran/search') ?>
            <input type="text" name="keyword" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" 
            autocomplete="off" placeholder="Cari..">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
          <?php echo form_close() ?>
        </div>
        
        <table class="table">
            <tr>
                <th>No</th>
                <th>No Pemesanan</th>
                <th>No Rekening</th>
                <th>Jenis Pembayaran</th>
                <th>Total Bayar</th>
            </tr>
            <?php 
            
            $no = 1;
            foreach($pembayaran as $bayar) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $bayar->NoPemesanan ?></td>
                <td><?php echo $bayar->NoRekening ?></td>
                <td><?php echo $bayar->JenisPembayaran ?></td>
                <td><?php echo $bayar->TotalBayar ?></td>
            </tr>

            <?php endforeach; ?>
        </table>
      </section>
</div>