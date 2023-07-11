<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/table.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>>
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
                <a class="nav-link" href="<?php echo base_url('index.php/Welcome/index')?>">Home</a>
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
<body>
 
<div class="container" style="margin-top:20%;">
    <div class="row">
        <div class="col-md-12">
        <h2 style="text-align:center;">SUGGESTION REGIME</h2>
        <table class="table">
            <thead class="thead-dark">
                <th>Petit dejeuner</th>
                <th>Dejeuner</th>
                <th>Diner</th>
                <th>Sport</th>
                <th>Duree</th>
                <th>Prix</th>
            </thead>
        <tbody class="tbody-ligth">
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
        </tbody>
        </table>
</div>
</div>
</div>
        
</body>
</html>