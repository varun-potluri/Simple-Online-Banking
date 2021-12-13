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

    <h2>Create Customer</h2>

    <form action="insert.php" method="POST">
	<p class="round">
        <label for="ssn"><b>SSN</b></label>
        <input type="text" placeholder="Enter customer SSN" name="ssn" required> <br> <br>
        <label for="firstname"><b>First Name</b></label>
        <input type="text" placeholder="Enter customer first name" name="firstname" required> <br> <br>
        <label for="lastname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter customer last name" name="lastname" required> <br> <br>
        <label for="mobilenumber"><b> Phone Number </b></label>
        <input type="tel" name="phone_number" id="phone_number" placeholder="Enter customer mobilenumber" name="mobilenumber" required> <br> <br>
        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter city" name="city" required> <br> <br>
        <label for="flatno"><b>Flat no</b></label>
        <input type="text" placeholder="Enter flatno" name="flatno" required> <br> <br>

        <label for="bankerssn"><b>Banker SSN</b></label>
        <input type="text" placeholder="Enter Banker SSN" name="bankerssn" required> <br> <br>

        <label for="accountid"><b>Account no</b></label>
        <input type="text" placeholder="Enter Account no" name="accountid" required> <br> <br>

        <label for="depositamount" id="deposit" onclick="check()"><b>Deposit Amount</b></label>
        <input type="text" placeholder="Enter deposit amount" name="depositamount" required> <br> <br>
        <i class="material-icons" style="font-size:20px;color: red">Deposit amount minimum $500</i>

        <div class="clearfix">
            <button type="button" onclick="window.location.href='index.html'" class="cancelbtn"><b> Cancel </b> </button>
        <button type="submit" name="submit"><b> Create </b> </button>
        </div>
        </div>
	</p>
    </form>
    
</body>

</html>