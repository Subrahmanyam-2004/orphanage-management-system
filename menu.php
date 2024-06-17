<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-image: url('image/654745f8e36ca.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }

        .login-button {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px 20px;
            background-color: #c96f00;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: rgb(17, 177, 195);
            border: 2px solid #e14343;
            border-radius: 5px;
            padding: 20px;
            width: 200px;
            text-align: center;
            margin: 10px;
            transition: box-shadow 0.3s;
            background-color: whitesmoke;
        }

        .box:hover {
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgb(17, 177, 195);
            color: white;
            text-align: center;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .button:hover {
            background-color: rgb(17, 177, 195);
        }

        .button-description {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <a href="adminlogin.php" ><button class="login-button" type="submit" id="logout" name="logout">Logout</button></a>                      
    <div class="button-container">
        <div class="box">
            <div class="button-div">
                <a href="signupdisplay.php"><div class="button">USER'S PROFILE</div></a>
                <p class="button-description">To display the profile of all the users</p>
            </div>
        </div>
        <div class="box">
            <div class="button-div">
                <a href="donationdisplay.php"><div class="button">DONATION</div></a>
                <p class="button-description">To display the users who donated amounts</p>
            </div>
        </div>
        <div class="box">
            <div class="button-div">
                <a href="servicedisplay.php"><div class="button">SERVICES</div></a>
                <p class="button-description">To display the users who want to provide services</p>
            </div>
        </div>
    </div>
</body>
<?php
if(isset($_POST['logout'])){
    echo "<script>window.location.href='adminLogin.php'</script>";
}
?>
</html>
