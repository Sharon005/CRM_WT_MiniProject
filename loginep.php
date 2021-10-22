<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            height: 200px;
            background-color: rgb(2,0,36); 
            background-image: linear-gradient( 90deg, rgba(2,0,36,1) 0%, rgba(51,61,133,1) 34%, rgba(0,212,255,1) 100%);

            }

            .box {
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #191919;
            text-align: center;
            }

            .box h1 {
            color: white;
            font-weight: 500;
            }

            .box input[type="text"],
            .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            }

            .box input[type="text"]:focus,
            .box input[type="password"]:focus {
            width: 280px;
            border-color: #2ecc71;
            }

            .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
            }

            .box input[type="submit"]:hover {
            background: #2ecc71;
            }

    
    </style>

    <title>Login Page</title>
</head>

<body>
    <form class="box" action="login_ep.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Enter your login id">
        <input type="password"  name="password" placeholder="Enter your password">
        <input type="submit" placeholder="Login">
    </form>
</body>

</html>