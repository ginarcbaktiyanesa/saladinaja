<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Bahan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('pemesanan')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Bahan</li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <?php echo $this->session->flashdata('message'); ?>
      <section class="content">
      <a class="btn btn-primary" href="<?= base_url('bahan/add_bahan')?>"><i class="fa fa-plus"></i><span>Tambah Data Bahan</span></a>
      <div class="input-group">
        <?php echo form_open('bahan/search') ?>
            <input type="text" name="keyword" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" 
            autocomplete="off" placeholder="cari..">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
          <?php echo form_close() ?>
        </div>
        
        <table class="table">
        <tr>
                <th>No</th>
                <th>Kode Bahan</th>
                <th>Nama Bahan</th>
                <th>Aksi</th>
            </tr>
            <?php 
            
            $no = 1;
            foreach($bahan as $bhn) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $bhn->KodeBahan ?></td>
                <td><?php echo $bhn->NamaBahan ?></td>
                <!-- <td><?php echo anchor('tmasuk/detail/'.$tmsk->notransaksi,'<div class="btn tbn-success"><i class="fa fa-search-plus"></i></div>')?>Rincian</td> -->
                <td><?php echo anchor('bahan/edit/'.$bhn->KodeBahan, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>Ubah</td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Bahan ini?')"><?php echo anchor('bahan/hapus_bahan/'.$bhn->KodeBahan,
                 '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>Hapus</td>
            </tr>
            
            <?php endforeach; ?>
        </table>
        
      </section>
</div>