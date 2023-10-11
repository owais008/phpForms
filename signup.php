<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Signup</title>

</head>

<body class="bg-dark">

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $servername = "localhost:3306";
        $username = "root";
        $pass = "Mysql@192";
        $database = "loginsystemphp";

        $conn = mysqli_connect($servername, $username, $pass, $database);
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            echo "connectiobn success";
        }

        $sql = "INSERT INTO `signupformphp` (`name`, `contact`, `email`, `password`, `cpassword`) VALUES ('$name', '$contact', '$email', '$password', '$cpassword')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>Your email and password has been submitted successfuly.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="success"></button>
    </div>';
        } else {
            echo "The value was not insert successfully because of this error --->" . mysqli_error($conn);
        }
    }

    ?>

    <div class="container col-lg-4 ">
        <h1 class="text-center mt-4 mb-4 text-light">SignUp Now</h1>
        <form action="/loginsystem/signup.php" method="post">
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <!-- <label for="name" class="form-label">Username</label> -->
                <input type="text" class="form-control" id="name" name="name" placeholder="your name">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                <!-- <label for="contact" class="form-label">Mobile Number</label> -->
                <input type="contact" class="form-control" id="contact" name="contact" placeholder="+91">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <!-- <label for="email" class="form-label">Email address</label> -->
                <input type="email" class="form-control" id="email" name="email" placeholder="name@gmail.com">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <!-- <label for="password" class="form-label">Password</label> -->
                <input type="password" class="form-control" id="pass" name="password" placeholder="********">
            </div>
            <div class="input-group mb-4 ">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <!-- <label for="cpassword" class="form-label">Confirm Password</label> -->
                <input type="cpassword" class="form-control" id="cpassword" name="cpassword" placeholder="confirm password" aria-describedby="emailHelp">
            </div>
            <!-- <div id="emailHelp" class="form-text mb-6">Make sure password should be same</div> -->
            <div class="d-grid">
                <button type="signup" class="btn btn-outline-success">Signup</button>
                <p class="text-center text-muted mt-2">
                    When you Register by clicking SignUp Button, You agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                </p>
                <p class="text-center text-light">
                    Already Have an Account ? <a href="/php forms/login.php">Login Here</a>
                </p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>