<html>
    <head>
        <title>
            Donator details</title>
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

    </head><body><center>
        <h1>DONATOR DETAILS</h1>
    <table >
        <tr>
            <td>S.N0</td>
            <td>Name</td>
            <td>Email</td>
            <td>Occassion</td>
            <td>Amount</td>
            <td>Image</td>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'ananda marga orphanage');
        $i=1;
        $rows=mysqli_query($conn, "select * from donation");
        foreach ($rows as $row) :   
           ?>

        <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Occasion']; ?></td>
            <td><?php echo $row['Amount']; ?></td>
            <td><img src="image/<?php echo $row['Image name']; ?>" height="300px" width="300px"></td>
        </tr>
        <?php endforeach;?>
</table>
</center>
</body>
        
</html>