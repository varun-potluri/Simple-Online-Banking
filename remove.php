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

    $records = mysqli_query($conn,"SELECT Balance FROM runningbalance INNER JOIN customer ON customer.AccountID = runningbalance.AccountID WHERE customer.SSN = $SSN;");
    $data = mysqli_fetch_row($records);
    $inbalance = $data[0];

    if($inbalance != 0){
        echo "<script type='text/javascript'>alert('Account Not Empty please Withdraw remaing Balance!'); window.location.href='index.html';</script>";
    }

    else{
        $query = "DELETE customer, runningbalance FROM customer INNER JOIN runningbalance ON customer.AccountID = runningbalance.AccountID WHERE customer.SSN = $SSN;";

    $run = mysqli_query($conn,$query);

    if($run){
        echo "<script type='text/javascript'>alert('Successfully Deleted!'); window.location.href='index.html';</script>";
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    }

}
else{
    echo "Hello";
}
?>