<?php
// include 'index.html';
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="crud";
echo "<br>Builoding Connecting...";

$conn = new mysqli($servername, $username, $password, $dbname);

echo "<br>After Building cinnection.";

if ($conn->connect_error) 
{
    echo "<br>Unable to connect";

    die("Connection failed: " );
}
else 
{
    echo "<br>Connected.";

    echo "<br>Collecting Variables...";
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    
    echo "<br>Builoding 2nd Sql with variables: " . $name . ", " . $email . ", " . $address . ", " . $contact;

    
    $sql = "INSERT INTO user (name,email,address,contact)    
    VALUES ('$name', '$email', '$address', '$contact')";

     // values(0,'aniket','avk45@gmail.com','jalagon','8412080720')";
  
    if ($conn->query($sql) === TRUE)
    {
        echo "<br>New record created successfully";
    } 
    else 
    {
        echo "<br>Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>Closing Connection...";

    $conn->close(); 

  echo "<br>Connect closed.";   
  
}
/*
if(isset($_POST["submit"]))
{
    echo "<br>Collecting Variables...";
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    
    echo "<br>Builoding 2nd Sql...";


    $sql = "INSERT INTO user (id,name,email,address,contact) values(1,'aniket','avk45@gmail.com','jalagon','8412080720')";
 

    if ($conn->query($sql) === TRUE)
    {
        echo "<br>New record created successfully";
    } 
    else 
    {
        echo "<br>Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>Closing Connection...";

    $conn->close();
        
}*/
?>