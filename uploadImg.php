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


if($conn){

$image=$_POST["image"];
$name=$_POST["name"];
$sql="update utilizadores set imagem = 'http://193.137.7.33/~estgv16833/utilizadoresImagens/$name.jpg' where id_utilizador=$name";
$upload_path="utilizadoresImagens/$name.jpg";

    if(mysqli_query($conn,$sql)){
    file_put_contents($upload_path,base64_decode($image));
    }
    else{
    }
    
}

else{
}

mysqli_close($conn);


?>