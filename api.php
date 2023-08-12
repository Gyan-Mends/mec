<?php
//starting session
//starting session
session_start();

//database connection
//database connection
include("./dbConnection.php");

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
?>