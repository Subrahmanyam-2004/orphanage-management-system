<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ananda Marga Children's Home</title>
    <link href="img/amlogo.jpg" rel="icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/main.jpg');

            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
           
            margin: 100px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .container {
            background-color: wheat;
            width: 500px;
            padding: 50px;
            border-radius: 3px;
            box-shadow: 10px 2px 5px rgba(216, 215, 215, 0.2);
        }

        h2 {
            text-align: center;
            color: black;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px ;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            background-color:orangered;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
 
    <div class="container">
        <form method="POST">
            Name:
            <input type="text" id="name" name="name" required><br>
            Email:<input type="text" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password<br><br>
            Phone no:<input type="text" name="phoneno" id="phoneno"><br>
            <b><label for="address">Address:</label></b>
            Door no:<input type="text" name="doorno" id="doorno">
            City:<input type="text" name="city" id="city">
            State:<input type="text" name="state" id="state">
            Country:<input type="text" name="country" id="country">
            <div class="btn-container">
                <button type="submit" class="btn" id="signup" name="signup">Sign Up</button>
            </div>
            <p>Already a user? <a href="login.html">Login</a></p>
        </form>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>

<?php
    if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phoneno=$_POST['phoneno'];
    $doorno=$_POST['doorno'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];

    
    $conn=mysqli_connect("localhost","root","","ananda marga orphanage");
    $st = "insert into signup values ('$name', '$email', '$password', '$phoneno', '$doorno', '$city','$state', '$country');";
    

    $q1="select * from signup where email='$email'";
    $q2="select * from signup where phonenumber='$phoneno'";
    if (mysqli_num_rows(mysqli_query($conn,$q1))>0){
        echo "<script>alert('email id already registered');</script>";
    }
    else if(mysqli_num_rows(mysqli_query($conn,$q2))>0){
        echo "<script>alert('phone number already registered');</script>";
    }
    else{
        $x=mysqli_query($conn,$st);
        if ($x)
            {echo "<script>alert('Registration Successful');</script>";}
        else
            {echo "<script>alert('Registration unsuccessful');</script>";}
        
        mysqli_close($conn);
        echo "<script> window.location.href='login.php'</script>";
    }
    mysqli_close($conn);
    
}
?>