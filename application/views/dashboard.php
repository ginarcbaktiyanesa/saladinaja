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
<body>
<br><br>
 
<div class="container_is">
   <div class="informasi">
      <br>
      <h2 class="judul">Salad</h2>
        <p class="p1">Salad adalah makanan yang terbuat atas campuran dari buah, daging, sayuran segar, 
        ikan dan unggas yang dihidangkan bersama dengan saus atau hanya terdiri atas buah 
        dan juice. Saus bukan hanya yang berwarna merah dan rasanya pedas, tetapi saus 
        adalah cairan yang dikentalkan.</p>
      <br>
      <h2 class="judul">Asal Kata Salad</h2>
      <p class="p1">Kata "salad" berasal dari Perancis salade arti yang sama, dari Latin salata (asin), dari sal (salt-garam). Dalam 
        bahasa Inggris, kata yang pertama muncul sebagai "salad" atau "sallet" ada pada abad ke-14.</p>
        <p class="p1">Garam dikaitkan dengan salad sayuran karena salad dibumbui dengan dressing air garam atau asin minyak dan 
          cuka selama masa Romawi. Penggunaan salad bar pertama kali muncul di Inggris Amerika pada tahun 1976.</p>
      <br>
      <h2 class="judul">Sejarah Salad</h2>
        <p class="p1">Sejarawan mengatakan bangsa Roma memakan sayuran campuran dengan "saus". Babilonia diketahui memakan 
          yuran hijau dengan minyak dan cuka dua ribu tahun yang lalu. Pada tahun 1699 dalam bukunya, Acetaria: 
          A Discourse on Sallets, John Evelyn berusaha dengan sedikit keberhasilan untuk mendorong rekan-rekan 
          Britons makan salad sayuran segar.</p>
        <p class="p1">Amerika Serikat mempopulerkan  salad di akhir abad 19 dan wilayah lain di dunia sepanjang paruh 
          kedua abad ke-20. Dari Eropa dan Amerika ke Cina, Jepang, dan Australia, salad dijual secara komersial 
          di supermarket bagi mereka yang tidak punya waktu untuk membuat salad buatan, di restoran (restoran 
          seringkali akan memiliki "Salad Bar" ditata dengan salad pembuatan bahan yang akan digunakan pelanggan 
          untuk menempatkan bersama salad mereka) dan di rantai makanan cepat saji yang mengkhususkan diri dalam 
          makanan kesehatan. Di pasar AS, rantai makanan cepat saji seperti McDonald's dan KFC, yang biasanya dijual 
         "junk food" seperti hamburger, kentang goreng, dan ayam goreng, sekarang menjual salad dikemas untuk 
          menarik perhatian konsumen sadar-kesehatan.</p>
      <br>
      <h2 class="judul">Klasifikasi berdasarkan :</h2>
        <h3 class="subjudul">Komposisi dan jenis bahan yang dipergunakan</h3>
        <ol>
          <p class="p1">1. Simple Salad</p>
              <p>Terbuat dari satu atau dua macam bahan makanan, contoh Beet Roat Salad, Cucumber 
                Salad, Tomato Salad, Potato Salad, Smoked Sausages, Beef Roast Salad Cucumber Salad.
              </p>
          <p class="p1">2. Compound Salad (Complex)</p>
              <p>Kreasi dari body yang terbuat dari tiga atau lebih bahan makanan yang dipergunakan. Contoh : 
                Yolande Salad, Coleslow, Rusian Salad, Tomato Monaco Salad, Russian Salad Coleslow.
              </p>
          <p class="p1">3. American Salad</p>
              <p>Hampir sama dengan compound salad, hanya body terbuat dari buah. Contoh : 
                Florida Salad, Orange Salad, Orange Salad, Avocado Salad.
              </p>
        </ol>
        <h3 class="subjudul">Temperatur salad</h3>
        <ol>
          <p class="p1">1. Cold Salad</p>
              <p>Salad pada umumnya dibuat dan dihidangkan dingin temperature 10-15 derajat celcius. 
                Contoh shrimp cocktail salad mixed salad.
              </p>
          <p class="p1">2. Hot Salad</p>
              <p>Dibuat dan dihidangkan panas atau agak panas dengan temperature 50-60 derajat celcius. 
                Contoh hot chicken salad, hot potato salad.
              </p>
        </ol>
        <br>
      <h2 class="judul">Manfaat Salad</h2>
        <p>
          <ul>
            <p class="p1">• Membangkitkan selera makan dengan berat porsi 50 gr - 75 gr</p>
            <p class="p1">• Makanan pendamping dengan berat perporsi 40 gr - 50 gr</p>
            <p class="p1">• Hidangan untuk orang vegetarian dengan berat perporsi 80 gr - 125 gr</p>
          </ul>
        </p>
  </div>
<br><br>
</div>
<br><br>

