            <!-- Modal -->
            <div class="modal fade" id="rincianmenu" role="dialog" arialabelledby="modalLabel" aria-hidden="true">

             <div class="modal-dialog" role = "document">
              <form method="post" action="./application/view/pemesan/keranjang.php">
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Kode Paket</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['NamaMenu'];?>" name="namamenu">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Bahan</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['NamaBahan'];?>" name="namabahan">
                            </div>
                            </div>
                  <div class="modal-footer">
                  <button class="btn btn-danger pull-left" data-dismiss="modal">Cancel</a></button>
                  <?php echo anchor('Pesan/tambah_ke_keranjang/'.$mn->KodeMenu,'<div class="btn btn-sm btn-primary">Tambah</div>')?>
                  </div>            
            </form>
            </div>
            </div>
 