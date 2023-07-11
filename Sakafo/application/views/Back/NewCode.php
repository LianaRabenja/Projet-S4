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


<div id="tab-3" class="tab-pane fade show p-0 active">
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Insert a new Code</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 offset-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="<?php echo base_url('index.php/BackController/insertionCode');?>" methode="get">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="name" name="name">
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="validation" placeholder="validation" name="validation">
                                            <label for="validation">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="account" placeholder="account" name="account">
                                            <label for="account">Account</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Save</S></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript Libraries -->
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
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>
</html>