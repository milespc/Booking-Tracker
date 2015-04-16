<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(isset( $_SESSION['user_id'] ))
{
    $message = 'Users is already logged in';
}
if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}

 else {
    
     $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
     $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     $mysql_hostname = 'localhost';
     $mysql_username = 'root';
     $mysql_password = '';
     $mysql_dbname = 'test';
     
      try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        
        $stmt = $dbh->prepare("SELECT idusers, username, password FROM users 
                    WHERE username = :username AND password = :password");
        
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);
        
        $stmt->execute();
        $user_id = $stmt->fetchColumn();
        
         if($user_id == false)
        {
                $message = 'Login Failed';
        }
         else
        {
                /*** set the session user_id variable ***/
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
                
        }
        
    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
 }
 ?>

<link rel="stylesheet" href="style.css" type="text/css">
<html>
<head>
</head>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='http://192.168.20.64/Booking%20Tracker/index.php'><span>Home</span></a></li>
   <li><a href='#'><span>Finance</span></a></li>
   <li><a href="#"<span><?php echo $username ?></span></a></li></li>
   <div id="navimg">
       <img src="../images/navbar.png" alt="Nav" height="60px" width="1024px">
   </div>
   
</ul>
</div>
<body>
<p>

<?php 

echo $message; 
echo "<p>$username</p>";
foreach($_SESSION as $key=>$value)
    {
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
    }

?>
</body>
</html>
 