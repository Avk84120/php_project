<body bgcolor="pink">
    

<form action="first.php" method="post">
    <h2>Enter your name :</h2>
    <input type="text" name="name" id="name">
    <br>
    <br>
    
    <h2>Enter your Email :</h2>
    <input type="text" name="email" id="email">
    <br>
    <br>

    <h2>Enter your Address :</h2>
    <input type="text" name="address" id="address">
    <br>
    <br>

    <h2>Enter your Contact Number :</h2>
    <input type="text" name="contact" id="contact">
    <br>
    <br>
    <input type="submit" name="submit">
    

</form>
</body>
<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="crud";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn -> connection_error);
{
    die("connection_fail...");
}

//if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];

    $sql="INSERT INTO 'user'('id,'name','email','address','contact') VALUES (NULL,'$name','$email','$address','$contact')";
    
//if($conn->query($sql) == true)
if (mysqli_query($conn, $sql))  
    {
        echo "New Record Add";
    }
    else
    {
       echo "Error";
    }

    $conn->close();

?>
