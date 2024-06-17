<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    
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
            background-color:rgba(17,177,195);
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
    <h1>Users List</h1>
    <?php
   
   $host="localhost";
   $dbuser="root";
   $pwd="";
   $dbname="ananda marga orphanage";

   $conn=new mysqli($host,$dbuser,$pwd,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    
    $sql = "SELECT * FROM signup";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        
        echo "<table border='1'>";
        echo "<tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Door-number</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>

            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['Name']."</td>
                    <td>".$row['Email']."</td>
                    <td>".$row['Password']."</td>
                    <td>".$row['Phonenumber']."</td>
                    <td>".$row['Door no']."</td>
                    <td>".$row['City']."</td>
                    <td>".$row['State']."</td>
                    <td>".$row['Country']."</td>
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
    
   
    mysqli_close($conn);
    ?>
</body>
</html>