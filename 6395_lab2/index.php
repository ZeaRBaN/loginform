<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <script defer src="script.js"></script>
</head>

<body>
<div id="error"></div>

     <form id="form" action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>Email</label>

        <input type="text" id="email" name="email" placeholder="ex:john@gmail.com"><br>

        <label>Password</label>

        <input type="password" id="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button><br> <br> 

        <a href="signup.php">Signup</a>

     </form>

</body>

</html>