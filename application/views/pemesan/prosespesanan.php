
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
<br><br>

<div class="container_is">
<div class="container-fluid">
    <div class="alert alert succsess">
        <p class="text-center align-milddle">Pesanan Anda Berhasil di Proses</p>
    </div>
</div>

