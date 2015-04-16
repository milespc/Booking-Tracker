<?php
?>

<link rel="stylesheet" href="style.css" type="text/css">
<html>
<head>
</head>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li><a href='#'><span>Finance</span></a></li>
   <div id="navimg">
       <img src="../images/navbar.png" alt="Nav" height="60px" width="1024px">
   </div>
  
</ul>
</div>
<body>
<form action="login_submit.php" method="post">
<fieldset>
<p>
<label for="username">Username</label>
<input type="text" id="phpro_username" name="username" value="" maxlength="20" />
</p>
<p>
<label for="password">Password</label>
<input type="text" id="phpro_password" name="password" value="" maxlength="20" />
</p>
<p>
<input type="submit" value="→ Login" />
</p>
</fieldset>
</form>
</body>
</html>