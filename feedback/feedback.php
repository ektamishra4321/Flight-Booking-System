<?php
$insert=false;
if(isset($_POST['name'])){
$_SERVER = "localhost";
$_USERNAME = "username";
$_PASSWORD = "password";

// Create connection
$conn = mysqli_connect($_SERVER, $_USERNAME, $_PASSWORD);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$name=$_POST['name'];
$email=$_POST['email'];
$country=$_POST['country'];
$feedback=$_POST['feedback'];


$sql="INSERT INTO `feedback`.`feedback`( `name`, `email`, `country`, `feedback`) VALUES ( '$name', '$email', '$country', '$feedback');";


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


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color:white;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit]{
  background-color:#2d7ec4;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:450px;
}

input[type=submit]:hover {
  background-color: #89c3f3;
}

.container {
  border-radius: 15px;
  background-color: #0d2732;
  padding: 20px;
  height:650px;
  width:600px;
  margin-top:25px;

}
body
{
    background-image:url('plane.jpg');
    background-repeat:no-repeat;
    background-size:cover;
}
.submess
    {
        color: white;
        font-size: 18px;
        border-style: dashed;
        padding:5px;
        border-color:white;
    }

</style>
</head>

<body>

<div class="container">
<center><?php    
if($insert==true){
echo "<span class='submess'> Feedback Form filled sucessfully</span><br>";
}
?></center>
<h2 style="margin-left:210px;">Feedback</h2>
  <form action="feedback.php" method="post" name="frm">
    <label for="name">Full Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="country">Country</label>
    <select id="country" name="country" required>
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit"  onclick="ValidateEmail(document.frm.email)" >
  </form>
</div>
<script>

function ValidateEmail(mail) 
{
    var x=document.getElementById("name").value;
        var z=document.getElementById("feedback").value;

        if(x==""|z=="")
        {
            alert("PLease fill in all the details");
        }
        
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(frm.email.value))
  {
    alert("Email address verified")
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
</script>
</body>
</html>
