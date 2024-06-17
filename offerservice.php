<?php
    session_start();
    if(!$_SESSION['login']){
        echo "<script> window.location.href='login.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <style>
        body{
            background-image: url(img/offerservice.jpg);
            background-size:100%;
            background-blend-mode:darken ;
        }
        .text-center{
            text-align: center;
            padding:05px;
            margin:10px;
            font-family:'Ubuntu', sans-serif ;
            font-size:40px;
        }
        .form{
            width:500px;
            heigth:2000%;
            margin:20px auto;
            text-align: center;
            border-radius: 20px;
            border-radius:16px;
            box-sizing: border-box; 
            box-shadow: 7px 5px 10px #020202;
            background-color: rgba(253, 238, 238, 0.7);
        }

        .form input{
            text-align: center;
            margin: 7px 1px;
            padding: 6px 5px;
            
            font-size: 18px;
            border: 2px solid gray;
            border-radius: 9px;  
        }
        #darkbtn{
            color:black;
            border:3px solid black;
        }
        #text{
            text-align: center;
            font-size: 18px;
            height:170px;
            width:409px;
            border-radius: 2px;
            color:black;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .Service{
            top: auto;
            align-items: center;
            
            width: 100%;
            height:100%;
            margin: 27px;
            font-family: 'Ubuntu', sans-serif;
            padding: 0px;
        }
        
        .in{
            text-align: left; /* Align labels to the left */
            margin-bottom: 10px; /* Added margin to separate labels */
            padding-left: 20px;
            font-size: 20px;
            font-weight: li;
        }
        .btn{
            padding:8px 20px;
            margin:7px 0;
            border: 2px solid white;
            border-radius: 8px;
            background: none;
            color:white;
            cursor:pointer;
        }
        .mar{
            background-color: white;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <?php
            
            echo "<h2 style='text-align: center;color:#03001c'> Welcome ".$_SESSION['name']."!</h2>";
        ?>
    <section class="Service" id="Service">

        <br><br>
        <div class="form">
        <form method="post">
            <center>
    <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="name" id="name" placeholder="Enter Your Name" required></td>
        </tr>
        <tr>
            <td>Contact :</td>
            <td><input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number" required></td>
        </tr>
        <tr>
            <td>Occasion :</td>
            <td><input type="text" name="event" id="event" placeholder="Enter Occasion" required></td>
        </tr>
        <tr>
            <td>Date :</td>
            <td><input type="date" name="date" id="date" required></td>
        </tr>
        <tr>
            <td>Time :</td>
            <td><input type="time" name="time" id="time" required></td>
        </tr>
        <tr>
            <td>Ellaborate :</td>
            <td><textarea name="description" id="description" cols="27" rows="3" placeholder="Elaborate Your Concern"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-dark" type="submit" id="submit" name="submit" style="background-color: white; color: black;"><strong>SUBMIT</strong></button></td>
        </tr>
    </table></center>
</form>

        </div>
    </section>

<?php

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $number=$_POST['phone'];
        $event=$_POST['event'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $ell=$_POST['description'];
        $conn=mysqli_connect("localhost","root","","ananda marga orphanage");

        $insertquery="insert into services values('$name','$number','$event','$date','$time','$ell');";
        $res=mysqli_query($conn,$insertquery);

        if($res)
        {
            echo "
            <script>
                alert('Event registered successfully');
            </script>";
        }
        else
        {
            echo "
            <script>
                alert('Date not Inserted ');
            </script>";
        }
    }

?>
</body>
</html>