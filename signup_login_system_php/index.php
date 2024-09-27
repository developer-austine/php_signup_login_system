<?php
require_once 'includes/config.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup||Login_system</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    
        
 <h3>Sign Up</h3>

    <form action="includes/signup.inc.php" method="post">
       <?php
       signup_inputs();
        ?>
        <button>signup</button>
    </form>

    <?php 
    check_signup_errors();
    ?>

    <h3>Login</h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <button>Login</button>
   </form>    


</body>
</html>