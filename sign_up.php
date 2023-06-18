<?php
//starting session
//starting session
session_start();

//database connection
//database connection
include("dbConnection.php");

if (isset($_POST["submit"])) {
    //retrieving data from the input field
    //retrieving data from the input field
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $date = date("Y-m-d");

    //checking if email alredy exist
    //checking if email alredy exist
    $check = mysqli_query($connection, "SELECT * FROM sign_up WHERE EMAIL='$email'");
    if (mysqli_num_rows($check)>0) {
        echo "
            <script>;
                alert('Email has been taken exist');
                window.location.href='sign_up.php';
            </script>;
        ";
    } else {
        //inserting data into the database
        //inserting data into the database
        $insert = mysqli_query($connection, "INSERT INTO sign_up (`name`,`email`,`number`,`password`,`date`) VALUES ('$name', '$email','$number','$password','$date')");
        if ($insert) {
            echo "
            <script>;
                alert('Registeration Sucessful');
                window.location.href='login.php';
            </script>;
        ";
        } else {
            echo "
            <script>;
                alert('Something went wrong');
                window.location.href='sign_up.php';
            </script>;
        ";
        }
    }
}
?>

<!DOCTYPE html>
<html class="" style=" overflow-x:hidden;" lang="en">

<head>
    <link rel="stylesheet" href="Assets/fonts/fonts.css">
    <script src="Assets/tailwind.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: 'poppins'; overflow-x:hidden;" class="bg-gray-800 ">
    <div class=" flex justify-center items-center h-screen ">
        <div class=" lg:h-[30rem] lg:w-[40rem] dark:bg-gray-600 lg:border lg:border-gray-500 rounded-md items-center flex  justify-center h-screen">
            <form action="" method="post">
                <div class="flex justify-center items-center text-white">
                    <h1 class="lg:text-[30px] lg:-mt-20 text-[23px]">Create New Account </h1>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-8 ">
                    <div>
                        <label for="" class="text-white text-[16px]">Name</label><br>
                        <input class="h-8 w-60 rounded outline-none pl-2 placeholder:text-[14px]" type="text" placeholder="enter your name" name="name"><br><br>

                        <label for="" class="text-white  text-[16px]">Email</label><br>
                        <input class="h-8 w-60 rounded outline-none pl-2 placeholder:text-[14px]" type="text" placeholder="enter your email" name="email"><br><br>
                    </div>
                    <div class="-mt-10 lg:mt-0">
                        <label for="" class="text-white  text-[16px]">Number</label><br>
                        <input class="h-8 w-60 rounded outline-none pl-2 placeholder:text-[14px]" type="text" placeholder="enter your number" name="number"><br><br>x

                        <label class="text-white  text-[16px]">Password</label><br>
                        <input type="text" class="h-8 w-60 rounded outline-none pl-2 placeholder:text-[14px]" placeholder="enter your password" name="password"><br><br>
                    </div>
                </div>

                <div class="flex justify-center items-center bg-blue-500 h-8 rounded  w-32 m-auto mt-10">
                    <input class="text-white" type="submit" name="submit" value="Create">
                </div>
                <div class="text-center">
                    <p class="mt-8 text-white text-[13px]">Already have an account? <a class="text-blue-500" href="login.php"> Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>