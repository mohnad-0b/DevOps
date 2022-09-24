<?php 
    session_start();
    if(isset($_SESSION['user'])){
        header("location:profile.php");
    }
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $con = mysqli_connect("localhost","root","","app");
        $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$user', '$pass')";
        $result = mysqli_query($con,$sql);

        header("location:index.php");
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex align-items-center min-vh-100 bg-dark">
        <div class="container d-flex justify-content-center">
    <form method="POST" class="bg-light px-5 px-4 rounded-2 col-md-6 col-lg-5 col-xl-4">
        <h1 class="text-center mb-4">Create your account</h1>
        <div class="mb-3">
            <label for="user" class="form-label">username :</label>
            <input type="text" id="user" name="user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">password :</label>
            <input type="password" id="pass" name="pass" class="form-control" required>
        </div>
    
        <div class="divmb-3">
            Have an account? <a href="index.php" >Sign in</a>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-75 d-block m-auto">Login</button>
    </form>
    </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>