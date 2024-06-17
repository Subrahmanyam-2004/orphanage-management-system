
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Complaint Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://blog.ipleaders.in/wp-content/uploads/2016/08/complaint.jpg');
            margin: 0;
            padding: 0;
        }
    
        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin: 0;
        }
    
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    
        label {
            display: block;
            font-weight: bold;
        }
    
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    
        input[type="file"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
    
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
    
</head>
<body>
    <h1>Bus Complaint Form</h1>
    <form method="POST">
        
        
        <fieldset>
            <center><h2><u>VEHICLE DETAILS</u></center>
        <label for="bus_number">Bus Number:</label>
        <input type="text" id="bus_number" name="bus_number" ><br><br>

        <label for="complaint">Complaint:</label><br>
        <textarea id="complaint" name="complaint" rows="4" ></textarea><br><br>

        <label for="date">Date of Tarvel:</label>
        <input type="date" id="date" name="date" ><br><br>

        <label for="time">Time of Arrival:</label>
        <input type="time" id="time1" name="time1" ><br><br>

        <label for="time">Time of Departure:</label>
        <input type="time" id="time2" name="time2" ><br><br>

        <label for="location">Start Location:</label>
        <input type="text" id="location1" name="location1" ><br><br>

        <label for="location">Destination Location:</label>
        <input type="text" id="location2" name="location2" ><br><br>


        <label for="ticket_id">Ticket_id:</label>
        <input type="text" id="ticket_id" name="ticket_id" required><br><br>


        <label for="file">Ticket (attachment mandatory):</label>
        <input type="file" id="book" name="book" accept='.jpg,.jpeg,.png' required><br><br>
        </fieldset>

        <br>
        <input type="submit" id="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $busNo=$_POST['bus_number'];
        $complaint=$_POST['complaint'];
        $date=$_POST['date'];
        $arrivalTime=$_POST['time1'];
        $departureTime=$_POST['time2'];
        $start=$_POST['location1'];
        $stop=$_POST['location2'];
        $ticketId=$_POST['ticket_id'];
        #$ticket=$_POST['attachment'];

        
            #to upload image
        if($_FILES["book"]['error']=== 4)
        {
            echo "<script>alert('Image does not exist')</script>";
        }
        else{
            $filename=$_FILES['book']['name'];
            $filesize=$_FILES['book']['size'];
            $tmpname=$_FILES['book']['tmp_name'];
            $validImageExtension=['jpg','jpeg','png'];
            $imageExtension=explode('.',$filename);
            $imageExtension=strtolower(end($imageExtension));
            if ($filesize>100000) {
            echo "<script>alert('Image size is too large')</script>";
            }
            else {
            $newImageName=uniqid();
            $newImageName .='.' . $imageExtension;

            move_uploaded_file($tmpname,'image/' . $newImageName);
            
        
            
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $host="localhost";
        $dbuser="root";
        $pwd="";
        $dbname="cms";

        $conn=new mysqli($host,$dbuser,$pwd,$dbname);
        $st="insert into bus_complaints values('$busNo','$complaint','$date,'$arrivalTime','$departureTime','$start','$stop','$ticketId','$newImageName');";
        $status=$conn->query($st);

        if($status){
            echo "<script>alert('Complaint registered successfully');</script>";
        }
        else{
            echo "<script>alert('invalid data');</script>";
        }
        }   }
         
    }
?>