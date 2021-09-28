<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <?php echo $this->session->flashdata('message'); ?>
      <section class="content">
        <a class="btn btn-primary" href="<?= base_url('menu/add')?>"><i class="fa fa-plus"></i><span>Tambah Data Menu</span></a>
        <div class="navbar-form navbar-right">
        <?php echo form_open('menu/search') ?>
            <input type="text" name="keyword" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" 
            autocomplete="off" placeholder="Cari..">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
          <?php echo form_close() ?>
        </div>

        <table class="table">
        <tr>
                <th>No</th>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                <th>Harga Menu</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th></th>
                <th></th>
                <th>Aksi</th>
                <th></th>
            </tr>
            <?php 
            
            $no = 1;
            foreach($menu as $mn) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mn->KodeMenu ?></td>
                <td><?php echo $mn->NamaMenu ?></td>
                <td><?php echo $mn->HargaMenu ?></td>
                <td><?php echo $mn->Stok ?></td>
                <td><img src="<?php echo base_url(); ?>assets/gambar/<?php echo $mn->Gambar; ?>"width="120" height="100"></td>
                <td></td>
                <!-- <td><?php echo anchor('bahan/add/'.$mn->KodeMenu,'<div class="btn tbn-success"><i class="fa fa-plus"></i></div>')?>Tambah Bahan</td> -->
                <td><?php echo anchor('menu/detail/'.$mn->KodeMenu,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?>Rincian</td>
                <td><?php echo anchor('menu/edit/'.$mn->KodeMenu, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>Ubah</td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Menu ini?')"><?php echo anchor('menu/hapus/'.$mn->KodeMenu,
                 '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>Hapus</td>
            </tr>
            
            <?php endforeach; ?>
        </table>
        
      </section>
</div>