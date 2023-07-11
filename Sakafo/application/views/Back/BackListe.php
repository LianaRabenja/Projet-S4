<link href="<?php echo base_url('assets/imgs/favicon.ico')?>" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="<?php echo base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assetslib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
</head>
<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">List of Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">List</small>
                                    <h6 class="mt-n1 mb-0">Code</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">List</small>
                                    <h6 class="mt-n1 mb-0">Sport</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">List</small>
                                    <h6 class="mt-n1 mb-0">Plat</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">List</small>
                                    <h6 class="mt-n1 mb-0">Regime</h6>
                                </div>
                            </a>
                        </li>
                    </ul>



                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5">Code</h1>
                        </div>
                            <div class="row g-4">
                                <?php for($i=0; $i<count($code); $i++){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span style="width:60%"><?php echo $code[$i]['nom'] ?></span>
                                                <span class="text-primary">
                                                    <form action="<?php echo base_url('index.php/BackController/modifier');?>">
                                                        <input type="hidden" value="<?php echo $code[$i]['idCode'] ?>" name="id">
                                                        <input type="hidden" value="1" name="types">
                                                        <input type="submit" value="Modifier">
                                                    </form>
                                                </span>
                                            </h5>
                                            <small class="fst-italic">Prix : <?php echo $code[$i]['argent']?>Ar</small>
                                            <?php if($code[$i]['etat']==1){?>
                                                <small class="fst-italic" style="color:red">Code desactiver</small><br>
                                            <?php }else{ ?>
                                                <small class="fst-italic" style="color:green">Code activer</small><br>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>  
                            </div>
                        </div>



                        <div id="tab-2" class="tab-pane fade show p-0 active">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5">Sport</h1>
                        </div>
                            <div class="row g-4">
                                <?php for($i=0; $i<count($sport); $i++){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php echo base_url('assets/imgs/menu-1.jpg')?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span style="width:60%"><?php echo $sport[$i]['nom'] ?></span>
                                                <span class="text-primary" >
                                                    <form action="<?php echo base_url('index.php/BackController/supprimer');?>">
                                                        <input type="hidden" value="<?php echo $sport[$i]['id'] ?>" name="id">
                                                        <input type="hidden" value="2" name="types">
                                                        <input type="submit" value="Supprimer">
                                                    </form>
                                                </span>
                                                <span class="text-primary">
                                                    <form action="<?php echo base_url('index.php/BackController/modifier');?>">
                                                        <input type="hidden" value="<?php echo $sport[$i]['id'] ?>" name="id">
                                                        <input type="hidden" value="2" name="types">
                                                        <input type="submit" value="Modifier">
                                                    </form>
                                                </span>
                                            </h5>
                                            <small class="fst-italic">Duree : <?php echo $sport[$i]['duree']?>Heure</small>
                                            <?php if($sport[$i]['positive']==1){?>
                                                <small class="fst-italic" style="color:red">Poids gagner: <?php echo $sport[$i]['poids']?>g</small><br>
                                            <?php }else{ ?>
                                                <small class="fst-italic" style="color:green">Poids perdue: <?php echo $sport[$i]['poids']?>g</small><br>
                                            <?php } ?>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>



                        <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5">Plat</h1>
                        </div>
                            <div class="row g-4">
                                <?php for($i=0; $i<count($plat); $i++){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php echo base_url('assets/imgs/menu-1.jpg')?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span style="width:60%"><?php echo $plat[$i]['nom'] ?></span>
                                                <span class="text-primary" >
                                                    <form action="<?php echo base_url('index.php/BackController/supprimer');?>">
                                                        <input type="hidden" value="<?php echo $plat[$i]['id'] ?>" name="id">
                                                        <input type="hidden" value="3" name="types">
                                                        <input type="submit" value="Supprimer">
                                                    </form>
                                                </span>
                                                <span class="text-primary">
                                                    <form action="<?php echo base_url('index.php/BackController/modifier');?>">
                                                        <input type="hidden" value="<?php echo $plat[$i]['id'] ?>" name="id">
                                                        <input type="hidden" value="3" name="types">
                                                        <input type="submit" value="Modifier">
                                                    </form>
                                                </span>
                                            </h5>
                                            <small class="fst-italic">Plat pour le: 
                                                
                                            <?php if($plat[$i]['typePlat']==1){?>
                                                Petit dejeune
                                            <?php }if($plat[$i]['typePlat']==2){?>
                                                Dejeuner
                                            <?php }if($plat[$i]['typePlat']==3){?>
                                                Diner
                                            <?php }?>
                                            </small>
                                            <small class="fst-italic">Prix : <?php echo $plat[$i]['prix']?>Ar</small>
                                            <?php if($plat[$i]['positive']==1){?>
                                                <small class="fst-italic" style="color:red">Poids gagner: <?php echo $plat[$i]['poids']?>g</small><br>
                                            <?php }else{ ?>
                                                <small class="fst-italic" style="color:green">Poids perdue: <?php echo $plat[$i]['poids']?>g</small><br>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5">Regime</h1>
                        </div>
                            <div class="row g-4">
                                <?php for($i=0; $i<count($regime); $i++){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php echo base_url('assets/imgs/menu-1.jpg')?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span style="width:60%"><?php echo $regime[$i]['nom'] ?></span>
                                                <span class="text-primary" >
                                                    <form action="<?php echo base_url('index.php/BackController/supprimer');?>">
                                                        <input type="hidden" value="<?php echo $regime[$i]['id'] ?>" name="id">
                                                        <input type="hidden" value="4" name="types">
                                                        <input type="submit" value="Supprimer">
                                                    </form>
                                                </span>
                                                <span class="text-primary">
                                                    <form action="<?php echo base_url('index.php/BackController/modifier');?>">
                                                        <input type="hidden" value="<?php echo $regime[$i]['id'] ?>" name="id">
                                                        <input type="hidden" value="4" name="types">
                                                        <input type="submit" value="Modifier">
                                                    </form>
                                                </span>
                                                <span class="text-primary">
                                                    <form action="<?php echo base_url('index.php/BackController/info');?>">
                                                        <input type="hidden" value="<?php echo $regime[$i]['id'] ?>" name="id">
                                                        <input type="hidden" value="4" name="types">
                                                        <input type="submit" value="Plus d'info">
                                                    </form>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/lib/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body>

</html>