<html>

<head>
    <title>
        schedule
    </title>
</head>
<style>
    div.one {
        background-color:aqua;
        font-family: "Bauhaus 93";
        font-size: 30px;
    }

    #schd {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #schd td,
    #schd th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #schd tr:nth-child(even) {
        background-color:mediumaquamarine;
    }

    #schd tr:hover {
        background-color:aqua;
    }

    #schd th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color:midnightblue;
        color: white;
    }
    .btn {
  background-color:midnightblue;
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
  background-color: gray;
}
.button
{
background-color:lightgreen;
color:black;
font-size:20px;
padding:8px;
border-radius:15px;
margin-top:10px;
}


.button:hover
{
background-color:green;


}
</style>

<body bgcolor="lightblue">
    <div class="one">
        <center><u>Flight Schedule</u></center>
    </div><br>
    <center>
        <table id="schd">
            <tr>
                <th>Flight Number</th>
                <th>From (Airport)</th>
                <th>Departure Time</th>
                <th>Destination Airport</th>
                <th>Arrival Time</th>
                <th>Operating Days</th>
                <th>Non-Stop/Connecting</th>
            </tr>

            <tr>
                <td>AF 1101</td>
                <td>Mumbai (BOM)</td>
                <td>10:05</td>
                <td>Ahemdabad (AMD)</td>
                <td>11:25</td>
                <td>Daily except Wed</td>
                <td>Non-Stop</td>
            </tr>

            <tr>
                <td>AF 1104</td>
                <td>Ahemdabad (AMD)</td>
                <td>12:05</td>
                <td>Mumbai (BOM)</td>
                <td>13:25</td>
                <td>Daily except Wed</td>
                <td>Non-Stop</td>
            </tr>

            <tr>
                <td>AF 1324</td>
                <td>Bengaluru (BLR)</td>
                <td>07:15</td>
                <td>Kochi (COK)</td>
                <td>08:30</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>

            <tr>
                <td>AF 1301</td>
                <td>Bengaluru (BLR)</td>
                <td>09:20</td>
                <td>Kolkata (CCU)</td>
                <td>11:20</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>
            <tr>
                <td>AF 1192</td>
                <td>Mumbai (BOM)</td>
                <td>07:00</td>
                <td>Surat (STV)</td>
                <td>8:20</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>
            <tr>
                <td>AF 1101</td>
                <td>Mumbai (BOM)</td>
                <td>10:05</td>
                <td>Ahemdabad (AMD)</td>
                <td>11:25</td>
                <td>Daily except Wed</td>
                <td>Non-Stop</td>
            </tr>

            <tr>
                <td>AF 1104</td>
                <td>Ahemdabad (AMD)</td>
                <td>12:05</td>
                <td>Mumbai (BOM)</td>
                <td>13:25</td>
                <td>Daily except Wed</td>
                <td>Non-Stop</td>
            </tr>

            <tr>
                <td>AF 1324</td>
                <td>Bengaluru (BLR)</td>
                <td>07:15</td>
                <td>Kochi (COK)</td>
                <td>08:30</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>

            <tr>
                <td>AF 1301</td>
                <td>Bengaluru (BLR)</td>
                <td>09:20</td>
                <td>Kolkata (CCU)</td>
                <td>11:20</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>
            <tr>
                <td>AF 1192</td>
                <td>Mumbai (BOM)</td>
                <td>07:00</td>
                <td>Surat (STV)</td>
                <td>8:20</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>
            <tr>
                <td>AF 1324</td>
                <td>Bengaluru (BLR)</td>
                <td>07:15</td>
                <td>Kochi (COK)</td>
                <td>08:30</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>

            <tr>
                <td>AF 1301</td>
                <td>Bengaluru (BLR)</td>
                <td>09:20</td>
                <td>Kolkata (CCU)</td>
                <td>11:20</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>
            <tr>
                <td>AF 1192</td>
                <td>Mumbai (BOM)</td>
                <td>07:00</td>
                <td>Surat (STV)</td>
                <td>8:20</td>
                <td>Daily</td>
                <td>Non-Stop</td>
            </tr>
            <tr>
                <td>AF 1101</td>
                <td>Mumbai (BOM)</td>
                <td>10:05</td>
                <td>Ahemdabad (AMD)</td>
                <td>11:25</td>
                <td>Daily except Wed</td>
                <td>Non-Stop</td>
            </tr>

        </table>
    </center>
    <a href="epayment.php">
        <input type="button" value="Book ECONOMY class ticket" class="btn"></a>

        <a href="bpayment.php">
            <input type="button" value="Book Business class ticket" class="btn"></a>
            <a href="home_log.php"><button class="button">Home Page</button></a>
</body>

</html>