<?php
$servername = "localhost";
$username = "estgv16833";
$password = "estgv168332016";
$dbname = "estgv16833";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




//Isto é para obter apenas um array

/*
$sth = mysqli_query($conn,"SELECT * FROM pessoas");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);

*/     


//if(isset($_GET['query']) && isset($_GET['nome'])){



//Isto é para obter um objeto

$sql=$_GET['query'];



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//}


?>
