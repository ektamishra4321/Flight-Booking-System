<?php
$insert=false;
if(isset($_POST['dest'])){
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

$dest=$_POST['dest'];
$type=$_POST['type'];
$pay=$_POST['pay'];

$sql="INSERT INTO `cab_service`.`cab_service` ( `destination`, `car_type`, `payment_method`) VALUES ( '$dest', '$type', '$pay');";


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



<!------------------------------------------------------------------------------------------------------------------- -->

<html>

<head>
  <title>
    Cab Services
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
        color: green;
        font-size: 18px;
        background-color: white;
        
        padding-right: 0px;
        

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

<body bgcolor="#f6f0d1">
  <center>
    <div class="one">
      <center><u>AeroFly Services</u></center>
    </div><br>
    <?php
        if($insert==true){
            echo "<span class='submess'> Your cab has been booked </span><br><br>";
            echo "<span class='submess'> Your destination is $dest </span> ";
            }
      ?>
    <form action="cab.php" method="post">
      <div>
        <h2><u>Cab Services</u></h2>
        <table>

          <tr>
            <td>Destination:</td>
            <th><input type="text" id="dest" name="dest" placeholder="destination" size="70" required></th>
          </tr>

          <tr>
            <td>Type:</td><br>
            <th><select name="type" size="4" id="type" required>
                <option value="mini">Mini</option>
                <option value="sedan">Sedan</option>
                <option value="SUV">SUV</option>
                <option value="lux">Luxury</option>
              </select></th><br>
          </tr>

          <tr>
            <td>Payment via:</td>
            <th>
              <select name="pay" size="4" id="pay" required>
                <option value="cash">Cash</option>
                <option value="upi">UPI</option>
                <option value="credit card">Credit/Debit Card</option>
                <option value="wallets">Wallets</option>
              </select>
            </th>
          </tr>

          <tr>
            <td></td>
            <th><input type="submit" value="Submit"></th>
          </tr>
        </table>
       
        </div>
    </form>
    <a href="home_log.php"><button class="butt">Home Page</button></a>
  </center>
</body>

</html>


