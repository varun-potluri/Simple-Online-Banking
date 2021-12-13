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
    echo "Connection Good!";
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
    $accountid = $_POST['accountid'];
    $balance = $_POST['depositamount'];

    echo $SSN;
    echo $fname;
    echo $lname;
    echo $pnum;
    echo $city;
    echo $flno;
    echo $bankerssn;
    echo $accountid;
    $query = "INSERT INTO customer VALUES ('$SSN', '$fname', '$lname','$city','$flno', '$pnum','$bankerssn','$accountid')";
    $query2 = "INSERT INTO runningbalance values(0,$accountid,$balance)";
    $query3 = "INSERT INTO transactions (T_id, AccountID, Trancode, Tranname, credits, balance) values(0,$accountid, 'CR', 'credit', $balance, $balance)";

    $run = mysqli_query($conn,$query);
    $run = mysqli_query($conn,$query2);
    $run = mysqli_query($conn,$query3);

    #echo "<script type='text/javascript'>alert('$run'); window.location.href=\"create.php\";</script>";


    if($run){
        echo "<script type='text/javascript'>alert('Successfully Inserted!'); window.location.href=\"index.html\";</script>";
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }


    }
?>