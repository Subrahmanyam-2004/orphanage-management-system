<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ananda Marga Children's Home</title>
  <link href="img/amlogo.jpg" rel="icon">
  <style>
    body {
      background-image: url(https://static.vecteezy.com/system/resources/previews/013/766/012/non_2x/donation-box-and-charity-concept-human-hands-putting-money-cash-love-and-heart-to-donation-box-together-helping-doing-charity-illustration-free-vector.jpg);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8); 
      justify-content:middle;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
    }

    .form-container {
        text-align: center;
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Donation Form</h1>
    <form id="donationForm" method ="post" action ="donation.php">
      <label for="Name"><b>Name:</b></label>
      <input type="text" id="Name" name="Name" required />
      <br><br>
      
      <label for="Email"><b>Email:</b></label>
      <input type="Email" id="Email" name="Email" required />
      <br><br>
      
      <label for="Occasion"><b>Occasion:</b></label>
      <input type="text" id="Occasion" name="Occasion" required />
      <br><br>
      
      <label for="amount"><b>Amount Donated (rs):</b></label>
      <input type="number" id="amount" name="amount" min="1" step="1" required />
      <br><br>
      <label for="file"><b>Choose a file to upload:</b></label>
      <input type="file" name="file" id="file" required /><br><br>
      <button type="Submit" id="Submit" name="Submit">Donate</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>

<?php
    /*if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["file"])) {
        $selectedFile = $_POST["file"];
        echo "You selected: $selectedFile";
    }*/
    //echo "<script>alert("file is uploaded")</script>"
    if(isset($_POST['Submit'])){
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Occasion=$_POST['Occasion'];
        $Amount=$_POST['amount'];
        //$Name=$_POST['Name'];
        $conn=new mysqli('localhost', 'root', '','donation');
        $st= "insert into orphanage values('$Name','$Email','$Occasion','$Amount');";
        $x=mysqli_query($conn,$st); 
        echo "<script>alert('Registration Successful');</script>";
        mysqli_close($conn);
    }    
    

?>