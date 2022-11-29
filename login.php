<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <form class="container my-5" style="border: 5px solid;" action="logincheck.php" method="POST">
        <center class="my-5"><h2>Login From</h2></center>
        <center class="my-5">
        <input type="text" name="email" style="width: 400px; height:50px;background-color:aqua; border-radius:5px;" placeholder="Enter Email"><br><br>
        <input type="text" name="password" style="width: 400px; height:50px;background-color:aqua; border-radius:5px;" placeholder="Enter Password"><br><br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </center>
    </form>
</body>
</html>