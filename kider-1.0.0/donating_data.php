<html>
    <head>
        <title>
            Donator details</title><style>
        .body{
            background-image :"user.jpg";
            padding : 20px;
        }</style>
    </head><body><center>
        <h1><font color='orangered'>DONATOR DETAILS</font></h1>
    <table border=2 cellspacing=0 cellpadding=10>
        <tr>
            <td>S.N0</td>
            <td>Name</td>
            <td>Email</td>
            <td>Occassion</td>
            <td>Amount</td>
            <td>Image</td>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'ananda_marga_orphanage');
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
            <td><img src="image/<?php echo $row['File']; ?>"></td>
        </tr>
        <?php endforeach;?>
</table>
</center>
</body>
        
</html>