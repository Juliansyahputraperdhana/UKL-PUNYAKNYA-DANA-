<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
  }
  
  .container {
    width: 500px;
    margin: 0 auto;
  }
  
  .row {
    margin-bottom: 20px;
  }
  
  .col-md-6 {
    float: left;
    width: 50%;
    padding-right: 20px;
  }
  
  .col-md-offset-3 {
    float: left;
    width: 50%;
    padding-left: 20px;
  }

  h1 {
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  form {
    border: 1px solid #45a049;
    padding: 20px;
  }
  
  .form-group {
    margin-bottom: 10px;
  }
  
  .form-control {
    width: 100%;
    padding: 8px 12px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  .btn {
    width: 100%;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 12px;
    border: none;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #45a049;
  }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Forgot Password</h1>
            <form action="forgot-password.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>