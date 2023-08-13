<?php
//starting session
//starting session
session_start();

//database connection
//database connection
include("./dbConnection.php");

//ueser registeration
//ueser registeration
if (isset($_POST["register"]) && $_POST["register"] == "register") {
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
        $response = [
            'status' => 500,
            'message' => 'User already exist'
        ];
    } else {
        //inserting data into the database
        //inserting data into the database
        $insert = mysqli_query($connection, "INSERT INTO sign_up (`name`,`email`,`number`,`password`,`date`) VALUES ('$name', '$email','$number','$password','$date')");
        if ($insert) {
           $response = [
                'status' => 200,
                'message' => "User registered succeffully"
           ];
        } else {
            $response = [
                'status' => 404,
                'message' => "Unable to register user"
           ];
        }
        
        header('Content-type: application/json');
        echo json_encode($response);
    }
}

//user login
//user login
if (isset($_POST["login"]) && $_POST["login"] == "login") {
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
        $response = [
            'status' => 200,
            'message' => "User login successfull"
        ];
    } elseif (isset($admin_row["email"])) {
        $response = [
            'status' => 300,
            'message' => "Admin login successfull"
        ];
    }else {
        echo "
        <script>;
            alert('unable to login');
        </script>;
    ";
    }

    header('Content-type: application/json');
    echo json_encode($response);  
}

//service seller registeration
//service seller registeration
if(isset($_POST["serviceSeller"]) && $_POST["serviceSeller"] == "serviceSeller"){
    //accepting input
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $companyLocation = $_POST["companyLocation"];
    $phoneNumber = $_POST["phoneNumber"];
    $description = $_POST["description"];
    $paymentMode = $_POST["paymentMode"];
    $accountNumber = $_POST["accountNumber"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $logo = $_FILES["logo"];
}
?>