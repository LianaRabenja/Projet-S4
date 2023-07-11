<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/table.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendors/animate/animate.css')?>">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

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
<?php
    $information = $suggere;
    $net = $montant;
?>
<div class="row" style="margin-top:10%; margin-left:20%;">
<div class="col-md-3">
<p>Recharger mon compte</p>
<form method="get" action="<?php echo base_url('index.php/TraitementFront/verificationcarte')?>">
    <select name="credit" class="form-control">
        <?php
            foreach ($credit->result_array() as $row) {
        ?>
        <option value="<?php echo $row['idCode'];?>"><?php echo $row['code'];?></option>
        <?php } ?>
    </select>
    <button type="submit" class="btn btn-warning">Recharger</button>
</form>
</div>
</div>
<div class="container" id="pdf-content" style="margin-top:5%;">
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
        <?php
            for($a=0; $a<count($information); $a++){
               
            ?>
                <tr>
                <?php  for($y=0; $y<count($information[0]); $y++){ 
                    if($y!=3 && $y!=4){
                    ?>
                    <td><?php echo $information[$a][$y];?> <span style="color: crimson; font-weight:bold;">Ar</span></td>
                    <?php }else{ ?> 
                    <td><?php echo $information[$a][$y];?></td>
                <?php }} ?>     
                </tr>
            <?php } ?>
        </tbody>
        </table>
        <p>Net à payer : <span><?php echo $montant; ?>  Ariary</span></p>
        <button class="btn btn-info" onclick="generatePDF()">Exporte en pdf</button>
</div>
</div>
</div>
        
</body>
<script>
        function generatePDF() {
            // Create a new jsPDF instance
            window.jsPDF = window.jspdf.jsPDF;
            const doc = new jsPDF();

            // Get the content of the PHP page
            const content = document.querySelector('#pdf-content');

            // Generate the PDF using jsPDF
            doc.html(content, {
                callback: function(doc) {
                    doc.save('exported_pdf.pdf');
                },
                x:15,
                y:15,
                width:170,
                windowWidth:650
            });

           
        }
    </script>
</html>