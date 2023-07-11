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
        <div class="title">Welcome</div>
        <div class="subtitle">Let's start!</div>
        <form method="post" action="<?php echo base_url('index.php/TraitementFront/validationUser')?>">
        <div class="input-container ic2">
          <input id="email" name="email" class="input" type="text" value = "admin" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Email</label>
        </div>
        <div class="input-container ic2">
            <input id="mdp" name="mdp" class="input" type="text" value = "admin" placeholder=" " />
            <div class="cut"></div>
            <label for="mdp" class="placeholder">Password</label>
          </div>
        <button type="submit" class="submit">Sign in</button>
        </form>
        <p style="text-align: center;color: white;"> OR</p>
		<a href="<?php echo base_url('index.php/Login/index1')?>"><input type="button" value="Sign up" style="background-color: crimson;margin-left: 38%;  height: 50px; border-radius: 5px; color: white; width:100px; Font-size:20px;"></a>
      </div>    
</body>
</html>
