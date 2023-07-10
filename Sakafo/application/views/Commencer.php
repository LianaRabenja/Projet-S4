<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Style.css')?>">
</head>
<body>
<!-- navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Suggestion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("index.php/Go/Go")?>">Commencez</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Meal</span>
            </a>
        </div>
    </nav>




    <center>
        <div class="radio-center">
            <div class="centrer">
                <br><br><p><input type="checkbox" name="" id="">Perdre poids</p>
                <p><input type="checkbox" name="" id="">Augmenter de poids</p>
                <input type="submit" value="Valider" style="background-color: crimson; border-radius: 5px;">    
            </div>
                  </div>
    </center>
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