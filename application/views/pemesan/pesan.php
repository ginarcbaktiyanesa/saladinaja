<?php 
    $query = $this->db->get('bahan');
    $bahan = $query->result();
?>
<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?><!DOCTYPE html>
  <html lang="en">
  <head>
  <?php $this->load->view("templates/header.php") ?>
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
    width: 70%;
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

<div class="container_is">
<!-- <div class="hero"> -->
  
<br><br><br><br>

<!-- Tampil menu -->
<div class="container-fluid">
<div class="row text-center">

    <?php foreach ($menu as $mn) : ?>
        <div class="card mr-2 ml-4" style="width: 16rem;">
                <img src="<?php echo base_url().'/assets/gambar/'.$mn->Gambar?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $mn->NamaMenu ?></h5>
                <p><span class="badge badge-pill badge-success">Harga : Rp. <?php echo $mn->HargaMenu?></span></p>
                <!-- <button type ="button" class="btn btn-danger pull-left" data-toggle="modal" data-target="#rincianmenu" 
                KodeMenu="<?php echo $mn->KodeMenu; ?>">Tambah</a></button> -->
                <?php echo anchor('Pesan/tambah_ke_keranjang/'.$mn->KodeMenu,'<div class="btn btn-sm btn-primary" data-toggle="modal">Tambah</div>')?>

            </div>
            </div>
    <?php endforeach; ?> 
            

           
        <!-- Modal fruit salad(Rincian Menu dan Bahan) -->
       
       
        </div>
        <br><br><br><br>
<!--API PETA-->
<div class="card mb-3">
    <div id='map' style='width: 100%; height: 300px;'></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic2FsYWRpbmFqYSIsImEiOiJja2Rpd3VwMWkwOThiMnpuMGR0bms5cngzIn0.QJGQFy0K5n5H1gXDoAqP4A';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [107.615299,-6.8868957],
            zoom:15
    });

    var marker = new mapboxgl.Marker()
    .setLngLat([107.615299,-6.8868957])
    .addTo(map);

    // Add zoom and rotation controls to the map.
 map.addControl(new mapboxgl.NavigationControl());
    </script>
</div>