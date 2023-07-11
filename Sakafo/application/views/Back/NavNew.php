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
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Meal</h5>
                    <h1 class="mb-5">A New Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" 
                            href="<?php echo base_url('index.php/BackController/insertCode')?>">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">New</small>
                                    <h6 class="mt-n1 mb-0">Code</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" 
                            href="<?php echo base_url('index.php/BackController/insert')?>">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">New</small>
                                    <h6 class="mt-n1 mb-0">Sport</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" 
                            href="<?php echo base_url('index.php/BackController/insertPlat')?>">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">New</small>
                                    <h6 class="mt-n1 mb-0">Dish</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" 
                            href="<?php echo base_url('index.php/BackController/insertRegime')?>">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">New</small>
                                    <h6 class="mt-n1 mb-0">Regime</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>
</div>