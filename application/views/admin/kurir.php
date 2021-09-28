<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Kurir</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('pemesanan')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Kurir</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <?php echo $this->session->flashdata('message'); ?>
      <section class="content">
        <a class="btn btn-primary" href="<?= base_url('kurir/add')?>"><i class="fa fa-plus"></i><span>Tambah Data kurir</span></a>
        <div class="navbar-form navbar-right">
        <?php echo form_open('kurir/search') ?>
            <input type="text" name="keyword" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" 
            autocomplete="off" placeholder="Cari..">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
          <?php echo form_close() ?>
        </div>

        <table class="table">
        <tr>
                <th>No</th>
                <th>ID Kurir</th>
                <th>Nama Kurir</th>
                <th>Username</th>
                <!-- <th>Password</th> -->
                <th>Aksi</th>
            </tr>
            <?php 
            
            $no = 1;
            foreach($kurir as $kr) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $kr->IdKurir ?></td>
                <td><?php echo $kr->NamaKurir ?></td>
                <td><?php echo $kr->Username ?></td>
                <!-- <td><?php echo $kr->Password ?></td> -->
                <td><?php echo anchor('kurir/edit/'.$kr->IdKurir, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>Ubah</td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus kurir ini?')"><?php echo anchor('kurir/hapus/'.$kr->IdKurir,
                 '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>Hapus</td>
            </tr>
            
            <?php endforeach; ?>
        </table>
        
      </section>
</div>