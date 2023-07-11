<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/info.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
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
                <a class="nav-link" href="<?php echo base_url("index.php/Go/commencer")?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Go/Suggest")?>">Suggestion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Go/Go")?>">Commencer</a>
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
<form action="<?php echo base_url('index.php/Go/Suggest')?>" method="get">
<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Objectifs</span><span>Informations personnels</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3" style="color:white;">Que souhaitez vous?</h4>
											<div class="form-group">
												
												<label style="color:white;">Perdre : </label><input type="radio" name="info" checked=true value="0" id="">
												<i class="input-icon uil uil-at"></i>
												<!-- <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off"> -->
												
											</div>	
											<div class="form-group mt-2">
											
												<label style="color:white;">Augmenter : </label><input type="radio" name="info" value="1" id="">
												<i class="input-icon uil uil-at"></i>
												
											</div>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3" style="color:white;">Entrez vos informations</h4>
											<div class="form-group">
												<label style="color:white;">Femme : </label><input type="radio" checked=true name="sexe"value="0" id="">
												<label style="color:white;">Homme : </label><input type="radio" name="sexe"value="1" id="">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="number" placeholder="taille" name="taille" class="form-control">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="number" name="poids" id="" placeholder="poids"class="form-control">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<div class="form-group mt-2">
												<label style="color:white;">date de naissance:</label><input type="date" name="" id=""class="form-control">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn mt-4"style="color:white;background-color:crimson;">Valider</button>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</form>
		
</body>
</html>
