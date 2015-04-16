<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function createTaskbar()
{
    echo "<div id='cssmenu'>";
    echo "<ul>";
    echo "<li class='active'><a href='http://192.168.20.64/Booking%20Tracker/View/index.php'><span>Home</span></a></li>";
    echo "<li><a href='#'><span>Finance</span></a></li>";
    echo "<li><a href='http://192.168.20.64/Booking%20Tracker/View/insert.php'><span>Create Booking Number</span></a></li>";
    echo '<div id="navimg">';
    echo '<img src="images/navbar.png" alt="Nav" height="60px" width="1024px">';
    echo '</div>';
  
    echo '</ul>';
    echo '</div>';
    
}