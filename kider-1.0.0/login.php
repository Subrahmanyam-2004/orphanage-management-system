<?php
    session_start();
?>

<html>
    <head>
        <title>Ananda Marga Children's Home</title>
  <link href="img/amlogo.jpg" rel="icon">
    </head>
    <style >
  
        body {
            font-family: Arial, sans-serif;font-family: Arial, sans-serif;
            background-image: url('img/main.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
          
            margin: 0;
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
            border-radius: 10px;
            box-shadow: 10px 2px 5px rgba(0, 0, 0, 0.2);
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
            padding: 10px 30px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

    </style>
    <body>
        <div class="container">
            <h2 align="center"><b>Login into our website</b></h2>
            <form method="post">

                Email&nbsp;:&nbsp;&nbsp;&nbsp;<input type="text" id="email" name="email"><br><br>
                Password&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <small><a href="www.gmail.com">Forgot Password?</a></small>
                <input type="password" id="password" name="password"><br>
                &nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="myFunction()">Show Password
                
                <div class="btn-container">
                <!--<a href="https://kitkat12.000webhostapp.com/signup1.html"><button type ="submit" class="btn"><strong>Register</strong></button></a>&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                <button type ="submit" id="login" name="login" class="btn">Login</button><br>
            </div><br>
            
            Don't have an account? <a href="signup.php">SignUp</a></form>
        </div>
        

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

    </body>
</html>

<?php
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $conn=mysqli_connect('localhost',"root","","ananda marga orphanage");
        $st="select * from signup where email='$email' and password='$password'";

        $x=$conn->query($st);
        if($x->num_rows>0){
            echo "<script>alert('login successful');</script>";
            $_SESSION['login']=true;
            $row = $x->fetch_assoc();
            $_SESSION['name']=$row['Name'];
            $z=$_SESSION['name'];
            echo "<script>window.location.href='stuprofile.php'</script>";
        }
        else{
            echo "<script>alert('Enter valid details');</script>";
        }
    }
?>
