<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/image/icon.png') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<!-- css bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	
</head>
<body>
	
	<!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
         <!-- <a class="navbar-brand" href="#">REKRUTMEN</a> -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav">
               <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
               <a class="nav-item nav-link" href="#">Tentang Kami</a>
               <a class="nav-item nav-link" href="#">Job Vacancies</a>
               <a class="nav-item nav-link" href="#">Faq</a>
            </div>

            <div class="navbar-nav ml-auto">
                  <a class="nav-item btn btn-outline-danger tombol" href="<?php echo site_url('pelamar/auth') ?>">Sig In</a>
                  <a class="nav-item btn btn-outline-danger tombol" href="<?php echo site_url('pelamar/auth/daftar') ?>">Create Account</a>
            </div>
         </div>
      </div>
   </nav>
   <!-- Akhir Navbar -->

   
   <!-- Header SLIDER -->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('assets/image/header/header-1.jpg') ?>" alt="First slide">
            <!-- <div class="carousel-caption d-none d-md-block">
               <h5>Lorem ipsum dolor sit amet.</h5>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div> -->
         </div>
         <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/image/header/header-2.jpg') ?>" alt="Second slide">
         </div>
         <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/image/header/header-3.jpg') ?>" alt="Third slide">
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
   <!-- akhir Header SLIDER -->


   <!-- Info JOB -->
   <div class="jumbotron info">
      <div class="justify-content-center text-center">
         <h3 class="font-weight-bold text-muted">Saat ini terdapat 
         <a href="" class="btn btn-danger tombol font-weight-bold">1 Available Job(s)</a></h3>
      </div>
   </div>
   <!-- akhir Info JOB -->


   <!-- article -->
   <section class="artikel mt-5" id="artikel">
      <div class="container">
         <div class="col-lg-12 mt-5">
            <h2>Berita Utama</h2>
            <hr class="hr-article">
         </div>
         <div class="row text-center mt-5">

            <div class="col-lg-4">
               <div class="card">
                  <img class="card-img-top" src="<?php echo base_url('assets/image/article/article-1.jpg') ?>" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Article title</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="btn btn-danger tombol btn-block">Lihat Detail</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="card">
                  <img class="card-img-top" src="<?php echo base_url('assets/image/article/article-2.jpg') ?>" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Article title</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="btn btn-danger tombol btn-block">Lihat Detail</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="card">
                  <img class="card-img-top" src="<?php echo base_url('assets/image/article/article-3.jpg') ?>" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Article title</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="btn btn-danger tombol btn-block">Lihat Detail</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!-- akhir article -->




<center><h1><?php echo $this->session->flashdata('mdd')?></h1></center>

	<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
</body>
</html>