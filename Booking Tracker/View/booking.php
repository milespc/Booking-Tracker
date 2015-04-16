<div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active'><a href='http://localhost/booking.php'><span>Create booking</span></a></li>
   <li><a href='#'><span>Finance</span></a></li>
  
</ul>
</div>

<?php





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
echo '<form action=”form.php” method=”post” enctype=”multipart/form-data”>';

echo '<h1>Contact</h1>';

echo '<label></label>';

echo '<input name=”name” required=”required” placeholder=”Your Name”>';

echo '<label></label>';

echo '<input name=”email” type=”email” required=”required” placeholder=”Your Email”>';

echo '<label></label>';

echo '<textarea name=”message” cols=”20″ rows=”5″ required=”required” placeholder=”Message”></textarea>';

echo '<input id=”cancel” name=”cancel” value=”Cancel” />';

echo '<input id=”submit” name=”submit” type=”submit” value=”Submit”>';

echo '</form>';
 */








?>
<link rel="stylesheet" href="style.css" type="text/css">
<html>
    <head>
<title>Booking form</title>

<script src="slider.js"></script>
</head>
<body>
<div id="title">
<h3>Click the lion to create a booking</h3>
</div>
<!-- Sliding div starts here -->
<div id="slider" style="right:-342px;">
<div id="sidebar" onclick="open_panel()"><img src="images/logo.jpg"></div>
<div id="header">
<h2>Booking Form</h2>
<p></p>
<input name="bookID" type="text" value="Booking number">
<input name="type" type="text" value="Type">
<input name="week" type="text" value="Week">
<input name="booker" type="text" value="Booker">
<input name="clientC" type="text" value="Client Company Name">
<input name="guestN" type="text" value="Guest Name">
<input name="notes" type="text" value="Notes">
<input name="propertyN" type="text" value="Property Name">
<input name="propertyO" type="text" value="Property Operator">
<input name="city" type="text" value="City">
<input name="checkin" type="text" value="Check-In">
<input name="checkout" type="text" value="Check-out">
<input name="numberN" type="text" value="Number of Nights">
<input name="urg" type="text" value="Urgent">
<input name="fc" type="text" value="Finance Completed?">


<h4></h4>

<textarea>Details</textarea>
<button>Create booking</button>
</div>
</div>
<!-- Sliding div ends here -->
</body>
    
    
</html>
