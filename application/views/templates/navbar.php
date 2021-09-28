<body id="page-top">
	  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top" id="mainNav">
	    <div class= "container">
        <h1 class="navbar-brand font-weight-bold" href="#page-top">SALAD-in AJA</h1>
        <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger" href=<?= base_url('dashboard')?>>Tentang <span class="sr-only">(current)</span></a>
            </li>
    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gizi
              </a>
              <div class="nav-item dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href=<?= base_url('gizifruitsalad')?>>Morning Fruit Salad</a>
                <a class="dropdown-item" href=<?= base_url('gizicreamysalad')?>>Creamy Frozen Salad</a>
                <a class="dropdown-item" href=<?= base_url('gizisummersalad')?>>Perfect Summer Salad</a>
              </div>

            </li>

            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger" href="<?= base_url('pesan')?>">Pesan <span class="sr-only">(current)</span></a>
            </li>

            <div class="navbar">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <?php 
                         $keranjang = 'Keranjang Belanja : '.$this->cart-> total_items(). ' items'
                    ?>

                    <?php echo anchor('Pesan/detail_keranjang', $keranjang)  ?>
                  </li>
                </ul>
            </div>

		      </ul>
       </div>
      </div>
    </nav>
<div class="container_is">
  <div class="hero">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/img.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/img2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/img3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
       </a>
     </div>
   </div> 
</div> 
