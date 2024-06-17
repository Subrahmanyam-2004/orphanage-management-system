<!DOCTYPE html>
<html>
<head>
    <title>Service List</title>
   
</head>
<body>
    <style>

        body {
            background-image: url(''); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            background-color: rgb(17, 177, 195);
            color: black;
            padding: 20px;
            text-align: center;
            margin-bottom:20px;
           
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            box-shadow:0 10px 20px 0 rgba(0,0,0,0.3);
            border-radius:10px;
            margin:auto;
        }

        table, th, td {
            border: 0px solid #333;
        }

        th, td {
            padding:8px 30px;
            text-align: center;
        }

        th {
            background-color: rgb(17, 177, 195);
            color: #FFF;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        div{
            background-color:#BCB4B4;
            font-size:28px;
        }

    </style>
    <h1>Services list</h1>
    <?php
   
    include 'connection1.php';
   
   
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
   
    $sql = "SELECT * FROM services";
   
    $result = mysqli_query($con, $sql);
   
    if (mysqli_num_rows($result) > 0) {
       
        echo "<table border='1'>";
        echo "<tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Occasion</th>
                <th>Date(yyyy-mm-dd)</th>
                <th>Time</th>
                <th>Elaborate</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['Name']."</td>
                    <td>".$row['Phone Number']."</td>
                    <td>".$row['Ocassion']."</td>
                    <td>".$row['Date']."</td>
                    <td>".$row['Time']."</td>
                    <td>".$row['Ellaborate']."</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<html>
                <body>
                    <div><marquee>Date Not Present</marquee></div>
                </body>
            </html>";
    }
   
   
    mysqli_close($con);
    ?>
</body>
</html>