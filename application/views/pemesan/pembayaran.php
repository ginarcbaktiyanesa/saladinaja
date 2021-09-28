<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?><!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <style type="text/css">

    /* .jumbotron{
	background-image : url(img/hero.jpg);
} */
body {
    background-color: rgb(214, 250, 214);
    font-family: Georgia, Times, 'Times New Roman', serif;
}

.container {
    width: 100%;
    margin: auto;
}

.container a:hover {
    background-color: rgb(157, 212, 157);
    color: black;
}

.container_is {
    width: 50%;
    background-color: rgb(248, 252, 240);
    margin: auto;
}

/* .hero {
    height: 500px;
    background-image: url(img/hero.jpg);
    background-size: cover;
    background-position: 0 -150px ;
} */

.informasi .judul {
    margin-left: 20px;
    font-weight: bold;
    font-size: 25px;
    color: rgb(51, 71, 51);
}

.informasi .subjudul {
    font-weight: bold;
    color: rgb(57, 102, 57);
}

.informasi .p1 {
    margin-left: 20px;
    margin-right: 110px;
}

.informasi p {
    margin-right: 110px;
}

.informasi .subjudul {
    font-size: 20px;
    margin-left: 10px;
}

.footer {
    width: 100%;
    background-color:rgb(72, 165, 72);
    padding: 30px;
}

.footer .copy {
    color:rgb(27, 27, 27);
    text-align: center;

}

.qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 25px;
    font-weight: 700;
    line-height: 30px;
    padding: 0 2px
    ;min-width: 35px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
.qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}
div {
    text-align: center;
}
.minus:hover{
    background-color: #717fe0 !important;
}
.plus:hover{
    background-color: #717fe0 !important;
}
/*Prevent text selection*/
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
         
</style>
</head>
<br><br><br>




<body>
<!-- <div class="container_is">
<div class="container-fluid">  -->
<br><br>
<div class="container-fluid">
<h4> Data Belanja </h4>

<table class="table table=bordered table-striped table-hover">
    <tr>
        <th> NO </th>
        <th> Nama Menu </th>
        <th> Jumlah </th>
      
    </tr>

    <?php
    $no=1;
    foreach($this->cart->contents() as $items) : ?>
        <tr>
        <td> <?php echo $no++?></td>
        <td><?php echo $items ['name']?></td>
        <td><?php echo $items ['qty']?></td>
      
        </tr>
        
    <?php endforeach ; ?>

</table>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
            <?php
             $grand_total = 0;
             if($keranjang = $this->cart->contents()){
                 foreach ($keranjang as $item) {
                     $grand_total = $grand_total + $item['subtotal'];
                 }
                 echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
             }
            ?>
         </div><br><br>
         <hr><h3> Input Data Diri dan pembayaran </h3></hr>
         <?php echo $this->session->flashdata('message'); ?>

        <!-- <?php print_r($this->session->all_userdata()); ?> -->

        <hr><form  method="post" action="<?php echo base_url().'Pesan/proses_pesanan';?>"></hr>
        
             <div class="form-group">
             <i class="fas fa-align-left">
                <label> Nama Lengkap </label>
                <input type="text" name="NamaPemesan" placeholder="Nama Lengkap"
                class="form-control" auto complete="off" required>
            </div>
                
                <div class="form-group">
                    <label> Alamat Lengkap </label>
                    <input type="text" name="Alamat" placeholder="Alamat Lengkap"
                    class="form-control" autocomplete="off" required>
                </div>

                <div class="form-group">
                <label> No Telepon </label>
                <input type="text" name="Nohp" placeholder="Nomor Telepon Anda" 
                class="form-control" autocomplete="off" required>
                </div>
                

             <div class="form-group">
                <label> Pilih Metode Pembayaran </label>
                <select class="form-control" name ="JenisPembayaran">
                    <option value="Bayar di tempat"> Bayar di tempat </option>
                    <option value="Transfer"> Transfer (739-078-0677 a.n saladinaja)  </option>                
                </select></i>                    
             </div>

             <div class="form-group">
                    <label> No Rekening </label>
                    <input id="norek" type="text" name="NoRekening" placeholder="Masukkan No Rekening jika anda memilih metode transfer"
                    class="form-control" autocomplete="off">
             </div>

             <div class="form-group">
                    <label> Atas Nama </label>
                    <input type="text" name="AtasNama" placeholder="Masukkan Atas Nama Rekening jika anda memilih metode transfer"
                    class="form-control" autocomplete="off"> 
             </div>
             


             <button type="submit" class="btn btn-primary btn-block" style="width:200px;">Proses pesanan</button>
             
             </form>
            
           
             </div>
        <div class="col-md-2"></div>
    </div>
</div>
<!-- </div>
</div> -->
</body>
<br><br>