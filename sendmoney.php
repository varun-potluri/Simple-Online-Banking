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
    $accountid = $_POST['ano'];
    $amount = $_POST['amount'];
    $accountno = $_POST['anop'];

    # Getting Balance from Sending Account
    $records = mysqli_query($conn,"SELECT Balance FROM runningbalance WHERE AccountID = $accountid");
    $data = mysqli_fetch_row($records);
    $inbalance = $data[0];

    #Getting Balance from recieving Account
    $records2 = mysqli_query($conn,"SELECT Balance FROM runningbalance WHERE AccountID = $accountno");
    $data2 = mysqli_fetch_row($records2);

    if($inbalance < $amount){
        echo "<script type='text/javascript'>alert('Insufficient Funds!'); window.location.href='index.html';</script>";
    }
    else{
           $query = "UPDATE runningbalance SET Balance = Balance - $amount   WHERE AccountID = $accountid";
           $query2 = "UPDATE runningbalance SET Balance = Balance + $amount   WHERE AccountID = $accountno";

    
    $data = $data[0] - $amount;
    $data2 = $data2[0] + $amount;

    $query3 = "INSERT INTO transactions (T_id, AccountID, Trancode, Tranname, debits, balance) values(0,$accountid, 'TR', 'Transferred', $amount, $data)";
    $query4 = "INSERT INTO transactions (T_id, AccountID, Trancode, Tranname, credits, balance) values(0,$accountno, 'TR', 'Transferred', $amount, $data2)";

    $run = mysqli_query($conn,$query);
    $run = mysqli_query($conn,$query2);
    $run = mysqli_query($conn,$query3);
    $run = mysqli_query($conn,$query4);

    if($run){
        echo "<script type='text/javascript'>alert('Successfully Transferred!'); window.location.href='index.html';</script>";
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