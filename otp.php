<html>
</html>





<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color:blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: grey;
}


div {
  border-radius: 5px;
  background-color: #ADD8E6;
  padding: 20px;
}
.butt
{
background-color:lightgreen;
color:black;
font-size:20px;
padding:8px;
border-radius:15px;

}


.butt:hover
{
background-color:green;


}
</style>
<body bgcolor="midnightblue">
<font color="aqua">
<h1><center>Verification Form</center></h1>
<h2> Enter the given OTP Number on the message received on your phone to proceed with payment</h2></font>
<div>
  <form>
  <center> <font size="10px" color="black"> OTP NUMBER <br>
    
<script>

// Function to generate OTP
function generateOTP() {
		
	// Declare a digits variable
	// which stores all digits
	var digits = '0123456789';
	let OTP = '';
	for (let i = 0; i < 6; i++ ) {
		OTP += digits[Math.floor(Math.random() * 10)];
	}
	return OTP;
}


document.write( generateOTP() );
</script>
</center></font>
    

    <input type="submit" value="Verify">
    <input type="submit" value="Resend Message">
  </form>
</div>
<a href="home_log.php"><button class="butt">Home Page</button></a>
</body>
</html>


