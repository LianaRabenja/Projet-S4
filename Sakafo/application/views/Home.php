<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	 <!-- font icons -->
     <link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css')?>">

<link rel="stylesheet" href="<?php echo base_url('assets/vendors/animate/animate.css')?>">

<!-- Bootstrap + FoodHut main styles -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/foodhut.css')?> ">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Welcome/index")?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Go/Suggest")?>">Suggestion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Go/commencer")?>">Commencer</a>
            </li>
        </ul>
        <a class="navbar-brand m-auto" href="#">
            <img src="<?php echo base_url('assets/imgs/logo.svg')?>" class="brand-img" alt="">
            <span class="brand-txt">MEAL</span>
        </a>
        <ul class="navbar-nav">
            <!-- <li class="nav-item">
                <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
            </li> -->
            
        
            <li class="nav-item">
                <a href="components.html" class="btn btn-primary ml-xl-4">Deconnexion</a>
            </li>
        </ul>
    </div>
</nav>

	<!-- blog -->
	<br><div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">EVENTS AT THE MEAL</h2>
        <div class="row justify-content-center">
            <div class="col-sm-7 col-md-4 mb-5">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#foods" role="tab" aria-controls="pills-home" aria-selected="true">Positive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile" aria-selected="false">Negative</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="<?php echo base_url("assets/imgs/blog-1.jpg")?>" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$5</a></h1>
                                <h4 class="pt20 pb20">Reiciendis Laborum </h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="<?php echo base_url("assets/imgs/blog-2.jpg")?>" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$12</a></h1>
                                <h4 class="pt20 pb20">Adipisci Totam</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="<?php echo base_url("assets/imgs/blog-3.jpg")?>" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$8</a></h1>
                                <h4 class="pt20 pb20">Dicta Deserunt</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="juices" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="<?php echo base_url("assets/imgs/blog-4.jpg")?>" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$15</a></h1>
                                <h4 class="pt20 pb20">Consectetur Adipisicing Elit</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="<?php echo base_url("assets/imgs/blog-5.jpg")?>" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$29</a></h1>
                                <h4 class="pt20 pb20">Ullam Laboriosam</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="<?php echo base_url("assets/imgs/blog-6.jpg")?>" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$3</a></h1>
                                <h4 class="pt20 pb20">Fugit Ipsam</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo base_url("assets/vendors/jquery/jquery-3.4.1.js")?>"></script>
    <script src="<?php echo base_url("assets/vendors/bootstrap/bootstrap.bundle.js") ?>"></script>

    <!-- bootstrap affix -->
    <script src="<?php echo base_url("assets/vendors/bootstrap/bootstrap.affix.js") ?>"></script>

    <!-- wow.js -->
    <script src="<?php echo base_url("assets/vendors/wow/wow.js") ?>"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="<?php echo base_url("assets/js/foodhut.js")?>"></script>
</body>
</html>