<?php
$insert=false;
if(isset($_POST['name'])){
$_SERVER = "localhost";
$_USERNAME = "root";
$_PASSWORD = "";

// Create connection
$conn = mysqli_connect($_SERVER, $_USERNAME, $_PASSWORD);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$passport=$_POST['passport'];
$DOB=$_POST['DOB'];
$ccnum=$_POST['ccnum'];
$amount=$_POST['amount'];

$sql="INSERT INTO `payment`.`payment`(`name`, `email`, `phone`, `address`, `passport`, `DOB`, `ccnum`, `amount`) VALUES ('$name', '$email', '$phone', '$address', '$passport', '$DOB', '$ccnum','$amount');";
if ($conn->query($sql)==true){
    //  echo "Sucessfully inserted";
    $insert=true;
}
else{
    "ERROR: $sql <br> $conn->error";
}

$conn->close();
}
?>


<!---------------------------------------------------------------------------------------------- -->

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color:lightblue;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:green;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
.button {
  background-color:blue;
  color:white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.button:hover {
  background-color:aqua;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid black;
}

span.price {
  float: right;
  color: grey;
}
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.submess
    {
        color: blue;
        font-size: 18px;
        background-color: white;
        border-style: solid;
        padding-right: 0px;
        border-color:red;
    }
.seat
{
  background-color:blue;
  color:white;
  padding: 5px;
  margin: 5px;
  border: none;
  width: 30%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}    
</style>


<script>
            function validate() {
                var name = document.getElementById('name').value;
                var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
                var email =document.getElementById('email').value;
                var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;   
                var phone =document.getElementById('ph').value;
                var regPhone=/^\d{10}$/;  
                var address =document.getElementById('adr').value;
                var exp=document.getElementById('ccnum').value;
                var regexp =/^5[1-5][0-9]{14}$|^2(?:2(?:2[1-9]|[3-9][0-9])|[3-6][0-9][0-9]|7(?:[01][0-9]|20))[0-9]{12}$/;
                var passport =document.getElementById('passport').value;
                var DOB =document.getElementById('DOB').value;



if(!regName.test(name)){
        alert('Please enter your full name (first & last name).');
        document.getElementById('name').focus();
        return false;
    }
   if (email == "" || !regEmail.test(email)) {
                    window.alert("Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }
 if (phone == "" || !regPhone.test(phone)) {
                    alert("Please enter valid phone number.");
                    phone.focus();
                    return false;}
 if (address == "") {
                    window.alert("Please enter your address.");
                    address.focus();
                    return false;
                }
 if (passport == "") {
                    window.alert("Please enter your passport number.");
                    address.focus();
                    return false;
                }
if (DOB == "") {
                    window.alert("Please enter your DOB.");
                    address.focus();
                    return false;
                }
               
 if (exp=="" || !regexp.test(exp)){
                window.alert("Please enter a valid credit card number.");
                    exp.focus();
                    return false;
                }              
else {
  
        alert('The form has been submitted.You can proceed with further payment.');
        return true;

}
           }
</script>



 <h2>Payment Form</h2>
 
 <center><?php
if($insert==true){
echo "<span class='submess'> Details submitted you can proceed to further payment </span>";

}
?></center>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="epayment.php" name="RegForm" onsubmit="return validate()"  method="post" required>
      
        <div class="row">
          <div class="col-50">
            <h3>Personal details</h3>
            <label><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="name" placeholder="John  Doe">
          <label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
          <label>Phone number</label>
            <input type="text" id="phone" name="phone" placeholder="9969603230">
          <label for="pass">Address</label>
            <input type="text" id="address" name="address"  placeholder="Mumbai,maharashtra">
          <label for="pass">Passport Number</label>
            <input type="text" id="passport" name="passport" placeholder="A30672024">
            <label for="pass">Date of Birth</label>
            <input type="date" id="DOB" name="DOB" placeholder="DD-MM-YYYY">



           </div> 
        </div> 
<div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
<div>
            
             <label for="ccnum">View seat booking</label>
             
             <label for="ccnum">Economy Class</label>
             <input type="button" onclick="window.location.href = 'Business_Class.php';" class="seat" value="Business Class">
             <label for="ccnum">Business class</label>
             <input type="button" onclick="window.location.href = 'Economy_Class.php';" class="seat" value="Economy">

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">

            <label for="ccnum">Payment Amount</label>
            <input type="number" id="amount" name="amount">
            
    </div>
  </div>
</div>

<input type="submit" onsubmit="validate();" value="Submit" class="btn" >
        

        
    </div>
</div></form>
<a href="otp.php">
<input type="button" value="Proceed with payment" class="btn"></a>

<a href="home_log.php"><button class="seat">Home Page</button></a>
</html>

</html>