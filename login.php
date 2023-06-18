<?php
//starting session
//starting session
session_start();
//dbconnection
//dbconnection
include("dbConnection.php");
if (isset($_POST["submit"])) {
    //fetching data from the forms
    //fetching data from the forms
    $email = $_POST["email"];
    $password = $_POST["password"];

    //checking if  details exist in the database
    //checking if  details exist in the database
    $users_query = mysqli_query($connection, "SELECT * FROM `sign_up` WHERE email='$email' AND `password`='$password'");
    $admin_query = mysqli_query($connection, "SELECT * FROM `admin` WHERE email='$email' AND `password`='$password'"); 

    $users_row = mysqli_fetch_array($users_query);
    $admin_row = mysqli_fetch_array($admin_query);
    if (is_array($users_row)) {
        $_SESSION["email"] = $users_row["email"];
        $_SESSION["password"] = $users_row["password"];
    }elseif(is_array($admin_row)){
        $_SESSION["email"] = $admin_row["email"];
        $_SESSION["password"] = $admin_row["password"];
    }

    if (isset($users_row["email"])) {
        echo "
        <script>;
            alert('login Sucessful');
            window.location.href='users_daashboard.php';
        </script>;
    ";
    } if (isset($admin_row["email"])) {
        echo "
        <script>;
            alert('login Sucessful');
            window.location.href='admin_dashboard.php';
        </script>;
    ";
    }else {
        echo "
        <script>;
            alert('unable to login');
        </script>;
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Assets/fonts/fonts.css">
    <script src="Assets/tailwind.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: 'poppins';" class="bg-gray-800">
    <div class=" flex justify-center items-center h-screen ">

        <div class=" lg:h-[23rem] lg:w-[23rem] dark:bg-gray-600 lg:border lg:border-gray-500 rounded-md items-center flex  justify-center h-screen">
            <form action="" method="post">
                <div class="flex justify-center items-center text-white">
                    <h1 class="text-2xl">LOGIN</h1>
                </div>

                <label for="" class="text-white text-lg">Email</label><br>
                <input class="h-8 w-60 rounded outline-none pl-2" name="email" type="text" placeholder="enter email"><br><br>

                <label class="text-white text-lg">Password</label><br>
                <input type="text" class="h-8 w-60 rounded outline-none pl-2" name="password" placeholder="enter password"><br>

                <div class="text-right pt-1 text-red-500">
                    <a class="text-sm " href="">Forgot Password</a>
                </div><br>

                <div class="flex justify-center items-center bg-blue-500 h-8 rounded  w-32 m-auto">
                    <input class="text-white" type="submit" name="submit" value="LOGIN">
                </div>
                <p class="mt-8 text-white text-[13px]">Don't have an account? <a class="text-blue-500" href="sign_up.php"> SIGN UP</a></p>
            </form>
        </div>
    </div>
</body>

</html>