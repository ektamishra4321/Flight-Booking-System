<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size:50px;
}

.top-left {
  position: absolute;
  top: 50px;
  left: 50px;
  font-size:100px;
}

</style>
</head>
<body>

<h2>Image Text</h2>
<p>How to place text over an image:</p>

<div class="container">
  <img src="cimg.jpg" alt="Snow" height="400px" width="1300px" >
 
  <div class="top-left">Contact us</div>
  <div class="bottom-left">We are available one call away at the below helplines</div>
</div> 
  

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid blue;
  font-size: 18px;
  background-color:lightblue;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid blue;
}

#myTable tr.header, #myTable tr:hover {
  background-color:#6F8FAF;
}
</style>
</head>
<body bgcolor=#191970>

<h2> <font color="yellow"> City name and airport helpline numbers</font></h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">City</th>
    <th style="width:40%;">Airport Helpline</th>
  </tr>
  <tr>
    <td>Mumbai </td>
    <td>77665588</td>
  </tr>
  <tr>
    <td>Delhi</td>
    <td>66544327</td>
  </tr>
  <tr>
    <td>Bangalore</td>
    <td>88704321</td>
  </tr>
  <tr>
    <td>Chennai</td>
    <td>44589730</td>
  </tr>
  <tr>
    <td>Kolkata</td>
    <td>87632047</td>
  </tr>
  <tr>
    <td>Ahmedabad</td>
    <td>11983072</td>
  </tr>
  <tr>
    <td>Jaipur</td>
    <td>76588990</td>
  </tr>
  <tr>
    <td>Hyderabad</td>
    <td>22389760</td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<head>
  <!-- Design by foolishdeveloper.com -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
* {
  box-sizing:border-box;
}
body{
    background: black;
    font-family: sans-serif;
}
footer{
    position: absolute;
    top:900px;
    bottom: 0;
    left: 0;
    right: 0;
    background:black;
    height: auto;
    width: 100vw;

    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
     background-color:black;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
    background-color:black;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
     background-color:black;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
    background-color:black;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;

    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 20px;
padding-bottom: 40px;
    text-align: center;
    background-color:black;
}
.footer-bottom p{
float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
    background-color:black;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
   background-color:black;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
   background-color:black;
}
.footer-menu{
  float: right;
 background-color:black;

}
.footer-menu ul{
  display: flex;
   background-color:black;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
  background-color:black;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
  background-color:black;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}
      
@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
  background-color:black;
}
button
{
  background-color:yellow;
  font-size:25px;
  border-radius:15px;
}
}
    </style>
</head>
<body>
    <footer>
        <div class="footer-content">
            <h3><a href="about.php">About US</a></li>
            <p>Know more about us and connect with us through our social media accounts.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="home_log.php">Home</a></li>
                        <li><a href="">Privacy</a></li>
                        <li><a href="">Terms and conditions</a></li>
                        </ul>
                    </div>
        </div>

    </footer>


</body>
</html>

