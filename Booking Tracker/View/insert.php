<?php
include("components/header.php");
createTaskbar();
?>

<link rel="stylesheet" href="style.css" type="text/css">
<div id="wrapper">


</div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



//$sql = "INSERT INTO numbergenerator (value) VALUES ('test')";

function insert()
{
    
    //Creating database credentials
$host = "localhost";
$user = "root";
$password = "";
$database ="test";
$port = 3306;

//Create connection
$conn = new mysqli($host, $user, $password, $database, $port);

    $create = 'INSERT INTO numbergenerator (value) VALUES ("test")';
    $conn->query($create);
  $get = 'SELECT idNum FROM numbergenerator ORDER BY idNum DESC LIMIT 1';
    $result2 = $conn->query($get);
    if ($result2->num_rows >0)
    {
        while($row = $result2-> fetch_assoc())
        {
            
        echo "<button>SD15-" . $row["idNum"]. "</button>"; 
        }
        
    }
}

if(isset($_POST['select']))
{
    select();
}

else
{
    insert();
}