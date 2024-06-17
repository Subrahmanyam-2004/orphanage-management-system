<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ananda Marga Children's Home</title>
  <link href="img/amlogo.jpg" rel="icon">
  <style>
    body {
      background-image: url('img/donation.jpg');
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8); 
      justify-content:middle;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
    }

    .form-container {
        text-align: center;
}

    table {
        width: 100%;
        border-collapse: collapse;
    }
    table tr {
        margin-bottom: 10px; 
    }
    table td {
        padding: 5px;
    }
    button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-align: center;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
  <?php
            
            echo "<h3 style='text-align: center;'> Welcome ".$_SESSION['name']."!</h3>";
          ?>
    <center><h1>Donation Form</h1></center>
    <form id="donationForm" method="post" autocomplete="off" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="Name"><b>Name:</b></label></td>
            <td><input type="text" id="Name" name="Name" required /></td>
        </tr>
        <tr>
            <td><label for="Email"><b>Email:</b></label></td>
            <td><input type="Email" id="Email" name="Email" required /></td>
        </tr>
        <tr>
            <td><label for="Occasion"><b>Occasion:</b></label></td>
            <td><input type="text" id="Occasion" name="Occasion" required /></td>
        </tr>
        <tr>
            <td><label for="amount"><b>Amount Donated (rs):</b></label></td>
            <td><input type="number" id="amount" name="amount" min="1" step="1" required /></td>
        </tr>
        <tr>
            <td><label for="file"><b>Upload payment screenshot:</b></label></td>
            <td><input type="file" name="file" id="file" accept=".jpg, .jpeg, .png" required /></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="Submit" id="Submit" name="Submit">Donate</button></td>
        </tr>
    </table>
</form>

  </div>
</body>
</html>

<?php
    /*if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["file"])) {
        $selectedFile = $_POST["file"];
        echo "You selected: $selectedFile";
    }*/
    //echo "<script>alert("file is uploaded")</script>"
    if (isset($_POST['Submit'])) {
      $conn = new mysqli('localhost', 'root', '', 'ananda marga orphanage');
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Occasion = $_POST['Occasion'];
      $Amount = $_POST['amount'];
      if($_FILES["file"]['error']=== 4)
      {
        echo "<script>alert('Image does not exist')</script>";
      }
      else{
        $filename=$_FILES['file']['name'];
        $filesize=$_FILES['file']['size'];
        $tmpname=$_FILES['file']['tmp_name'];
        $validImageExtension=['jpg','jpeg','png'];
        $imageExtension=explode('.',$filename);
        $imageExtension=strtolower(end($imageExtension));
        /*if(!in_array($imageExtension, $validImageExtension)){
          echo "<script>alert('Invalid image extension')</script>";
        }
        else */if ($filesize>500000) {
          echo "<script>alert('Image size is too large')</script>";
        }
        else {
          $newImageName=uniqid();
          $newImageName .='.' . $imageExtension;

          move_uploaded_file($tmpname,'image/' . $newImageName);
          
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = "insert into donation values('$Name','$Email','$Occasion','$Amount', '$newImageName');";
    mysqli_query($conn,$stmt);
    echo "<script>alert('thanks for donating $Amount'); 
    </script>";
    
    
   # $stmt->close();
    #$conn->close();        
        }
      }
      //$File = addslashes(file_get_contents($_FILES['file']['name'])); // Fetch the content of the file
  
      
     /* 
      $stmt = $conn->prepare("INSERT INTO donation VALUES ('$Name','$Email','$Occasion','$Amount','($File)'");
      $stmt->execute();
      echo "<script>alert('Registration Successful');</script>";
      */
      $conn->close();
  }
     
    

?>