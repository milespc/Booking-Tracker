<?php

function createTab()
{
echo '<script src="slider.js"></script>';
echo '<body>';

echo '<div id="slider" style="right:-342px;">';
echo '<div id="sidebar" onclick="open_panel()"><img src="images/logo.jpg"></div>';
echo '<div id="header"> ';
echo '<h2>Booking Form</h2>';
echo '<p>Hello test does this replicate?</p>';
echo '<input name="bookID" type="text" value="Booking number">';
echo '<input name="type" type="text" value="Type">';
echo '<input name="week" type="text" value="Week">';
echo '<input name="booker" type="text" value="Booker">';
echo '<input name="clientC" type="text" value="Client Company Name">';
echo '<input name="guestN" type="text" value="Guest Name">';
echo '<input name="notes" type="text" value="Notes">';
echo '<input name="propertyN" type="text" value="Property Name">';
echo '<input name="propertyO" type="text" value="Property Operator">';
echo '<input name="city" type="text" value="City">';
echo '<input name="checkin" type="text" value="Check-In">';
echo '<input name="checkout" type="text" value="Check-out">';
echo '<input name="numberN" type="text" value="Number of Nights">';
echo '<input name="urg" type="text" value="Urgent">';
echo '<input name="fc" type="text" value="Finance Completed?">';




echo '<textarea>Details</textarea>';
echo '<button>Create booking</button>';
echo '</div>';
echo '</div>';
}

?>