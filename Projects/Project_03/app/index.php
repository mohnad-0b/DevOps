<?php 
    session_start();
    
    if(isset($_SESSION['user'])){
        header("location:profile.php");
    }
    if(isset($_POST['submit'])){
        
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $con = mysqli_connect("db","root","root","myDB");
        $sql = "SELECT * FROM users WHERE username = '$user' AND `password` = '$pass'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_num_rows($result);
    
        if($row !== 0){
        
            $_SESSION['user'] = $user;
            header("location:profile.php");
        }else{
            echo $row;
            $error = true;
            
        }
        mysqli_close($con);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex align-items-center min-vh-100 bg-dark">
        <div class="container d-flex justify-content-center">
    <form method="POST" class="bg-light px-5 px-4 rounded-2 col-md-6 col-lg-5 col-xl-4">
        <h1 class="text-center mb-4">Login</h1>
        <div class="mb-3">
            <label for="user" class="form-label">username :</label>
            <input type="text" id="user" name="user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">password :</label>
            <input type="password" id="pass" name="pass" class="form-control" required>
        </div>
    
        <div class="divmb-3">
            <a href="register.php" >Register</a>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-75 d-block m-auto">Login</button>
    </form>
    </div>

    <div class="modal" id="modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-danger bg-gradient">
                <div class="modal-header">
                    <h5 class="modal-title">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><h2>Username or password is incorrect</h2></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<?php if(isset($error)){ 
    echo " 
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('modal'), {
            keyboard: false
        })
        myModal.show()
    </script>
    ";
}
    ?>
</body>
</html>
