<html>

<head>
  <title>
    services
  </title>
</head>
<style>
  a:link {
    color: midnightblue;
    font-family: "Arial Black";
  }

  a:visited {
    color:midnightblue;
    font-family: "Arial Black";
  }

  h3 {
    font-family: "Times New Roman";
    color: aqua;
  }

  h2 {
    font-family: "Arial Black";
    color: aqua;
  }

  body {
    margin-left: 17px;
  }

  div.one {
    background-color: aqua;
    font-family: "Bauhaus 93";
    font-size: 30px;
  }

  .container {
    position: relative;
    width: 50%;
  }

  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }

  .container:hover .image {
    opacity: 0.3;
  }

  .container:hover .middle {
    opacity: 1;
  }

  .text1 {
    background-color: aqua;
    color: black;
    font-size: 16px;
    padding: 16px 32px;
  }

  .text2 {
    background-color: #34d6fa;
    color: black;
    font-size: 16px;
    padding: 16px 32px;
  }
</style>

<body bgcolor="black">
  <div class="one">
    <center><u>Services offered by Aerofly</u></center>
  </div><br>
  <center>
    <div class="container">
      <img src="cabz.jpg" alt="cabbin" class="image" style="width:100%">
      <div class="middle">
        <div class="text1"><a href="cab.php">Cab Booking</a></div>
      </div>
    </div>
  </center>
  <br>
  <center>
    <div class="container">
      <img src="wheely.jpg" alt="wheels" class="image" style="width:100%">
      <div class="middle">
        <div class="text2"><a href="wheelchair.">Services for senior citizens</a></div>
      </div>
    </div>
  </center>
</body>

</html>