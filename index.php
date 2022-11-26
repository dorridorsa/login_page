<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<form action="login.php" method="post">
<h2> Log in </h2>
<?php if (isset($_GET['erro'])) { ?>
<p class="error"> <?php echo $_GET['error']; ?></p>
<?php} ?>


<label> User name </label>
<input type="text" name="username" placeholder=" User name"><br>
<label> Password </label>
<input type="text" name="password" placeholder=" Password"><br>

<button type="submit"> Log in </button>

</form>





</body>
</html>