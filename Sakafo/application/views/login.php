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
        <button type="text" class="submit">Sign in</button>
        <p style="text-align: center;color: white;"> OR</p>
		<a href="#"><input type="button" value="Sign up" style="background-color: crimson;margin-left: 120px;  height: 50px; border-radius: 5px; color: white; width:100px; Font-size:20px;"></a>
      </div>    
</body>
</html>
