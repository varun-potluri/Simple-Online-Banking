<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "cs631";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Error to connect DB!";
}
else{
    echo "Connection good!";
}
if(isset($_POST['submit']))
    {
    $SSN = $_POST['ssn'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $pnum = $_POST['phone_number'];
    $city = $_POST['city'];
    $flno = $_POST['flatno'];
    $bankerssn = $_POST['bankerssn'];

    $query = "UPDATE customer SET Fname = '$fname', Lname = '$lname', city = '$city', FlNo = '$flno', Phone = '$pnum', BankerSSN = '$bankerssn' WHERE SSN = '$SSN'";

    $run = mysqli_query($conn,$query);

    if($run){
        echo "<script type='text/javascript'>alert('Successfully Modified!'); window.location.href='index.html';</script>";
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

}
else{
    echo "Hello";
}
?>