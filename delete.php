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

<h2>Remove Customer</h2>

<form action="remove.php" method = "POST">
	<p class="round">
	<label for="ssn"><b>SSN</b></label>
      <input type="text" placeholder="Enter customer SSN" name="ssn" required> <br> <br> 
      
      <div class="clearfix">
        <button type="button" onclick="window.location.href='index.html'" class="cancelbtn"><b> Cancel </b> </button>
        <button type="submit" name = "submit" class="signupbtn"><b> Save </b> </button>
      </div>
</div>
</p>
</form>

</body>
 
</html>