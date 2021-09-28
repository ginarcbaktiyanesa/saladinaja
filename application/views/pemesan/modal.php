
<div class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rincian Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <!-- <form  method="post"  action="<?php echo base_url().'Pesan/tambah';?>"></form> -->
                <div class="row">
                    <div class="col-md-7">
                        <table class="table table-borderless">
                            <tr>
                                <th> Bahan </th>
                                <td>
                                <div class="form-group">
                                        <!-- <label>Menu Bahan</label>
                                        <select class="form-control" name="bahan">
                                            <?php foreach($bahan as $bhn){ ?>
                                            <option  value="<?php echo $bhn->KodeBahan; ?>"><?php echo $bhn->NamaBahan; ?></option>
                                            <?php } ?> -->
                                            <!-- <option>1</option>
                                            <option>2</option> -->
                                        </select>

                                <!-- <label>
                                    <input type="checkbox" name="bahan[]" value="<?=$detail['NamaBahan']?>">
                                    <?=$detail['bahan']?>
                        
                                    </label><br> -->
                                    
                                    <!-- <input type="checkbox" name="bahan[]" value="1"style="width:20px;height:20px;"/> Pisang <br />
                                    <input type="checkbox" name="bahan[]" value="2"style="width:20px;height:20px;"/> Kiwi <br />
                                    <input type="checkbox" name="bahan[]" value="3"style="width:20px;height:20px;"/> Anggur <br />
                         -->
                                </td>
                            </tr>
                            </table>
                           


                            
                    </div>
                </div>
                </div> 

               <!-- Button footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                <?php echo anchor('Pesan/tambah_ke_keranjang/'.$mn->KodeMenu,'<div class="btn btn-sm btn-primary">Tambah</div>')?>
                </div>
            </div>
            </div>
        </div> 

