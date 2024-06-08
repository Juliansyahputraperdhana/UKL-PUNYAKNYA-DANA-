<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .login-container {
        width: 300px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .login-container h2 {
        text-align: center;
    }
    .login-container input[type="text"],
    .login-container input[type="password"],
    .login-container select {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
        border: 1px solid #707070;
        border-radius: 5px;
    }
    .login-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #5d5d5d;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .login-container input[type="submit"]:hover {
        background-color: #5d5d5d;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="loginproses.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        
        <button>LOGIN</button>
    </form>
</div>

</body>
</html>
