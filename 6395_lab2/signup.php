<?php
session_start();

include "db_conn.php";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    if(!empty($name) && !empty($password)  && !empty($email))
    {   $sql = "SELECT * FROM users WHERE email='$email'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1)
        {
            echo"email already exist";
         
        }else
        {

        $password=md5($password);
        $sql =  "insert into users (name,password,email) values ('$name','$password','$email')";
    
        mysqli_query($conn,$sql);

       header("location: index.php");
       die;
        }
    }else
    {
        echo "please enter some valid info.";
    }

}

?>


<!DOCTYPE html>
<html>
    <head>
    <title>Signup</title>
    <script defer src="script2.js"></script>
    </head>
<body>
    <style type="text/css">
    #text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
color: white;
background-color: cyan;
border: none;
}

#box{

background-color: lightblue;
margin: auto;
width: 300px;
padding: 20px;
}
    </style>
    <div id="box">
        <form id="form2" method="post">
            <div style="font-size: 20px; margin: 10px;">Signup</div>
            <label for="email">Email :</label><br>
            <input id="email" type="text" name="email"><br><br>

            <label for="name">Name :</label><br>
            <input id="name" type="text" name="name"><br><br>

            <label for="password">Password :</label><br>
            <input id="password" type="password" name="password"><br><br>

            <label for="conpass">ConfirmPassword :</label><br>
            <input id="conpass" type="password" name="conpass"><br><br>

            <input id="button" type="submit" value="Signup"><br><br>
            <p>already have an account?<a href="index.php">Login</a><br><br>
            </p>
        </form>
        <div id="errors"></div>
        
    </div>

</body>
</html>