<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/log.css')?>">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <div class="title">Inscription</div>
        <form method="post" action="<?php echo base_url('index.php/TraitementFront/inscription')?>">
        <div class="input-container ic2">
          <input id="email" class="input" type="text" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="email" name="nom" class="placeholder">Last Name</label>
        </div>
		<div class="input-container ic2">
			<input id="email" name="prenom" class="input" type="text" placeholder="   " />
			<div class="cut cut-short"></div>
			<label for="email" class="placeholder">First Name</label>
		  </div>
		  <div class="input-container ic2">
			<input id="email" name="email" class="input" type="text" placeholder=" " />
			<div class="cut cut-short"></div>
			<label for="email" class="placeholder">Email</label>
		  </div>
        <div class="input-container ic2">
            <input id="mdp" name="mdp" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="mdp" class="placeholder">Password</label>
          </div>
		  <div class="input-container ic2">
			<input id="email" name="date" class="input" type="date" />
		  </div>
        <button type="submit" class="submit">Sign up</button><br>
	</div> 
	
</body>
</html>
