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
        
        <div class="input-container ic2">
          <input id="email" class="input" type="text" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Last Name</label>
        </div>
		<div class="input-container ic2">
			<input id="email" class="input" type="text" placeholder="   " />
			<div class="cut cut-short"></div>
			<label for="email" class="placeholder">First Name</label>
		  </div>
		  <div class="input-container ic2">
			<input id="email" class="input" type="text" placeholder=" " />
			<div class="cut cut-short"></div>
			<label for="email" class="placeholder">Email</label>
		  </div>
        <div class="input-container ic2">
            <input id="mdp" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="mdp" class="placeholder">Password</label>
          </div>
		  <div class="input-container ic2">
			<input id="email" class="input" type="date" />
		  </div>
        <button type="text" class="submit">Sign up</button><br>
		<p style="text-align: center;color: white;"> OR</p>
		<a href="<?php echo base_url("index.php/login/index1"); ?>"><input type="button" value="Sign in" style="background-color: crimson; Font-size:20px;margin-left: 120px;height: 50px; width: 100px; border-radius: 5px; color: white;"></a>
	</div> 
	
</body>
</html>
