<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <?php echo $this->session->flashdata('message'); ?>
      <section class="content">
        <a class="btn btn-primary" href="<?= base_url('pegawai/add')?>"><i class="fa fa-plus"></i><span>Tambah Data pegawai</span></a>
        <div class="navbar-form navbar-right">
        <?php echo form_open('pegawai/search') ?>
            <input type="text" name="keyword" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" 
            autocomplete="off" placeholder="Cari..">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
          <?php echo form_close() ?>
        </div>

        <table class="table">
        <tr>
                <th>No</th>
                <th>ID pegawai</th>
                <th>Nama pegawai</th>
                <th>Username</th>
                <!-- <th>Password</th> -->
                <th>Aksi</th>
            </tr>
            <?php 
            
            $no = 1;
            foreach($pegawai as $pgw) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pgw->IdPegawai ?></td>
                <td><?php echo $pgw->NamaPegawai ?></td>
                <td><?php echo $pgw->Username ?></td>
                <!-- <td><?php echo $pgw->Password ?></td> -->
                <td><?php echo anchor('pegawai/edit/'.$pgw->IdPegawai, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>Ubah</td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus pegawai ini?')"><?php echo anchor('pegawai/hapus/'.$pgw->IdPegawai,
                 '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>Hapus</td>
            </tr>
            
            <?php endforeach; ?>
        </table>
        
      </section>
</div>