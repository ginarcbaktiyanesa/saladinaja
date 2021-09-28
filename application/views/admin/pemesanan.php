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
              <li class="breadcrumb-item active">Data Pesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
      <div class="navbar-form navbar-right">
        <?php echo form_open('pemesanan/search') ?>
            <input type="text" name="keyword" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" 
            autocomplete="off" placeholder="Cari..">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
          <?php echo form_close() ?>
        </div>
        <table class="table">
            <tr>
                <th>No</th>
                <th>No Pemesanan</th>
                <th>Nama Pemesan</th>
                <th>Alamat</th>
                <th>No Hp</th> 
                <th>Total Bayar</th>
                <th>Status Pengiriman</th>
                <th>ID Pegawai</th>
                <th>ID Kurir</th>
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
                <td><?php echo $pesanan->IdPegawai ?></td>
                <td><?php echo $pesanan->IdKurir ?></td>
                
                <td><?php echo anchor('pemesanan/detail/'.$pesanan->NoPemesanan,'<div class="btn btn-success"><i class="fa fa-search-plus"></i></div>')?>Rincian</td>
                    <td onclick="javascript: return confirm('Anda Yakin Ingin Mengubah pesanan ini?')"><?php echo anchor('pemesanan/edit/'.$pesanan->NoPemesanan,
                  '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>Ubah</td>
                </td>
            </tr>

            <?php endforeach; ?>
        </table>
      </section>
</div>