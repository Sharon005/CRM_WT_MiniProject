<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/signup.css">

    <title>SignUp Page</title>
    

</head>

<body>
    <form class="box" action="/CRM/signup.php" method="POST">
        <h1>SignUp</h1>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your Username">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your Email ID">

        <label for="pass">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">

        <button type="submit">Sign Up</button>
    </form>
</body>

</html>