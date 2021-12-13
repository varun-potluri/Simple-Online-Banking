<!DOCTYPE html>
<html>
<style>
p.round {
  border: 2px solid grey;
  border-radius: 8px;
  padding: 5px;
}
input[type=text],[type=tel], select {
  width: 100%;
  padding: 12px 18px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
button{ 
width: 30%;
  padding: 12px 15px;
border-radius: 12px;
}
</style>
<body>

<h2>View Passbook</h2>

<form method = "POST">
<p class="round">
  <label for="accountid"><b>Account Number</b></label>
      <input type="text" placeholder="Enter Account Number" name="accountid" required> <br> <br>

      
      <div class="clearfix">
        <button type="button" onclick="window.location.href='index.html'" class="cancelbtn"><b> Menu </b> </button>
        <button type="submit" name = "submit" class="signupbtn"><b> View </b> </button>
      </div>
</div>
</p>
</form> 

<table border="2", padding="12px 18px", width="100%", display="inline-block">
  <tr>
    <td>AccountID</td>
    <td>Date</td>
    <td>Transaction Code</td>
    <td>Transaction Name</td>
    <td>Debits</td>
    <td>Credits</td>
    <td> Balance </td>
  </tr>
<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "cs631";

$conn = mysqli_connect($server, $username, $password, $dbname);
$accountid = $_POST['accountid'];

$records = mysqli_query($conn,"SELECT AccountID, Date_Time, Trancode, Tranname, debits, credits, balance FROM transactions WHERE AccountID = $accountid"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['AccountID']; ?></td>
    <td><?php echo $data['Date_Time']; ?></td>
    <td><?php echo $data['Trancode']; ?></td>
    <td><?php echo $data['Tranname']; ?></td>
    <td><?php echo $data['debits']; ?></td> 
    <td><?php echo $data['credits']; ?></td>   
    <td><?php echo $data['balance']; ?></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>