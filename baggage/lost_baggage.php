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
$location=$_POST['location'];
$time=$_POST['time'];
$date=$_POST['date'];
$email=$_POST['email'];

$sql="INSERT INTO `lost_baggage`.`lost_baggage` ( `name`, `location`, `time`, `date`, `email`) VALUES ( '$name', '$location', '$time', '$date', '$email');";


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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
p.one
    {
        font-size:16px ;
        color:white;
    }
    p.two
    {
        font-size: 30px;
        color:white;
    }
    p.three
    {
        font-size:20px;
        color:white;
    }
    a
    {
        font-size:20px;
        color:white;
    }
    body
    {
        background-color: rgb(46, 42, 42);
    }
    label
    {
        color: white;
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
</style>


<?php
if($insert==true){
echo "<span class='submess'> Form filled sucessfully, you will soon be reverted back about your baggage</span><br><br>";
}
?>
<body>
<form name="frm" action="lost_baggage.php" method="post">
    <label for="name" style="font-size:28px;">Enter Your Name </label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="loaction" style="font-size:28px;">Enter the location where you last saw your bag : </label><br>
    <input type="text" id="location" name="location" required><br>
    <label for="time" style="font-size:28px;">Enter the time you last saw your bag : </label><br>
    <input type="time" id="time" name="time"><br>
    <label for="email" style="font-size:28px;">Enter your email:  </label><br>
    <input type="text" id="email" name="email"><br>
    <label for="date" style="font-size:28px;">Enter Date:  </label><br>
    <input type="date" id="date" name="date"><br><br>
    <input type="submit" onclick="ValidateEmail(document.frm.email)" value="Submit"><br><br>
    
    
    

</form>

<p class="one">Liaibility for Carriage which is not international is subject to the rules and limitations relating to liability as specified by Notifications issued from time to time under Section 8 of the Indian Carriage by air Act, 1972 and pursuant to Notification No S.O. 142(E), dated January 17, 2014, issued by the Ministry of Civil Aviation.</p>    
<b><p class="three">Delayed Baggage</p></b>
<p class="one">For baggage which is not received , please contact Aerofly personnel in the arrival hall and report the same.A Property Irregularity Report will be filed and a copy will be given with a reference number for follow up action.</p>
<b><p class=three>Lost Baggage</p></b>
<p class="one">If a delayed baggage could not be traced for 21 days from the date of Property Irregularity Report , the same may be treated as lost. The compensation claim will be processed as per laid down procedures. All claims to be substantiated with itemized list of contents, description, age together with proof of purchase / ownership of all such items.</p>
<br>
<button><a href="first_page.html" target="first_page.html"><font style="color:black">GO BACK</font></a></button>

<script>

function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(frm.email.value))
  {
    alert("Email address verified")
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
    function pr()
    {
        var x=document.getElementById("loc1").value;
        var y=document.getElementById("loc2").value;
        var z=document.getElementById("loc3").value;
        var a=document.getElementById("loc4").value;
        var b=document.getElementById("loc5").value;

        
        
        if(x==""||y==""||z==""||a==""||b=="")
        {
            alert("PLease fill in all the details");
        }
        else
        {
            alert("Your details have been submitted, you will be informed shortly about your baggage through EMAIL.");
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