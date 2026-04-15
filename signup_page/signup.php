<?php
$insert=false;
if(isset($_POST['email'])){
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

$email=$_POST['email'];
$user_name=$_POST['user_name'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$sql="INSERT INTO `signup`.`signup` ( `email`, `user_name`, `phone`, `password`) VALUES ( '$email', '$user_name', '$phone', '$password');";


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

<html>

<head>
    <title>
        signup
    </title>
</head>
<style>
    h2 {
        font-family: "Bauhaus 93";
        color: #512a11;
    }

    body {
        margin-left: 17px;
        font-family: "Arial Black";
        color: #512a11;
    }

    div.one {
        background-color: bisque;
        font-family: "Bauhaus 93";
        font-size: 30px;
    }

    input[type=text],
    select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=password],
    select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {

        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
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
<script>
    function validateForm() {

        let z = document.forms["myForm2"]["email"].value;
        if (z.includes("@") == false) {
            alert("invalid email!");
            return false;
        }
        let x = document.forms["myForm2"]["user_name"].value;
        if (x.length < 6) {
            alert("username should be more than 6 characters");
            return false;
        }
        let y = document.forms["myForm2"]["phone"].value;
        if (y.length < 10 || y.length > 10) {
            alert("phone number should be 10 digits");
            return false;
        }
        if (isNaN(y) == true) {
            alert("phone number should contain only numbers");
            return false;
        }

        if (y.length < 10 || y.length > 10) {
            alert("phone number should be 10 digits");
            return false;
        }
        let a = document.forms["myForm2"]["password"].value;
        if (a.length < 5) {
            alert("password should be more than 5 characters");
            return false;
        }
    }
</script>
<center><?php
if($insert==true){
echo "<span class='submess'> Signed Up Succesfully </span>";
}
?></center>
<body bgcolor="#f6f0d1">

    <div class="one">
        <center><u>Aerofly Account</u></center>
    </div><br>
    <center>
        <div>
            <h2><u>Sign Up:</u></h2>
            <table>
                <form name="myForm2"  action="signup.php" method="post">
                    <tr>
                        <td align="right">E-Mail: </td>
                        <th><input type="text" id="email" name="email" placeholder="email" size="70" required></th>
                    </tr>

                    <tr>
                        <td align="right">Username: </td>
                        <th><input type="text" id="user_name" name="user_name" placeholder="username" required></th>
                    </tr>

                    <tr>
                        <td align="right">Phone Number: </td>
                        <th><input type="text" id="phone" name="phone" placeholder="phone" required></th>
                    </tr>

                    <tr>
                        <td align="right">Password: </td>
                        <th><input type="password" id="password" name="password" placeholder="password" required></th>
                    </tr>
                    <tr>
                        <td></td>
                        <th><input type="submit" onclick="validateForm()" value="Sign Up"></th>
                    </tr>
                </form> 
            </table>
        </div>


</center>

</body>