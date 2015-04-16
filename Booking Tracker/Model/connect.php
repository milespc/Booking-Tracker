<?php



//Creating database credentials
$host = "localhost";
$user = "root";
$password = "";
$database ="test";
$port = 3306;

//Create connection
$conn = new mysqli($host, $user, $password, $database, $port);

//Check connection
if (!$conn)
{
    die("Damn G, connection is down");
}



function printBookings()
{
    global $conn;
    
    $sql = "CALL orderbynumber";
    //$sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

        echo "<table><tr><th>Number</th><th>Week<th>Staff<th>Client Company<th>Guest Name<th>Real Property Name<th>Property Operator<th>City<th>Start Date<th>Finish Date<th>Nights<th>Invoice Dates<th>Payment Date<th>Finance Notes</tr>";

if ($result->num_rows >0)
{
    
    //output data of each row
    while($row = $result-> fetch_assoc())
    {
        echo "<tr><td> " . $row["Number"]. "</td><td>" . $row["Week"]. "</td><td>" . $row["Staff"]. "</td><td>" . $row["ClientCompany"]. "</td><td>" . $row["GuestName"]. "</td><td>" . $row["RealPropertyName"]. "</td><td>" . $row["PropertyOperator"]. "</td><td>" . $row["City"]. "</td><td>" . $row["StartDate"]. "</td><td>" . $row["FinishDate"]. "</td><td>" . $row["Nights"]. "</td><td>" . $row["InvoiceDate"]. "</td><td>" . $row["PaymentDate"]. "</td><td>" . $row["FinanceNotes"]. "</td></tr>";
    }
    echo "</table>";
}
else 
{
    echo "0 Results";
}
}

function closeConnections()
{
    global $conn;
    $conn->close();
}

?>