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
    #echo "Connection good!";
}
if(isset($_POST['submit']))
    {
    $accountid = $_POST['accountid'];
    $amount = $_POST['amount'];

    $query = "UPDATE runningbalance SET Balance = Balance - $amount   WHERE AccountID = $accountid";

    $records = mysqli_query($conn,"SELECT Balance FROM runningbalance WHERE AccountID = $accountid");
    $data = mysqli_fetch_row($records);
    $data = $data[0] - $amount;

    $query2 = "INSERT INTO transactions (T_id, AccountID, Trancode, Tranname, debits, balance) values(0,$accountid, 'WD', 'Withdraw', $amount, $data)";

    $run = mysqli_query($conn,$query);
    $run = mysqli_query($conn,$query2);

    if($run){
        echo "<script type='text/javascript'>alert('Successfully Withdrawn!'); window.location.href='index.html';</script>";
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

}
else{
    echo "Hello";
}
?>