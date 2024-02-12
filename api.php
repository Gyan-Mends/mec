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
    $cpassword =$_POST["cpassword"];
    $image = $_FILES["image"]["name"];
    $img_tmp_name = $_FILES["image"]["tmp_name"];
    $img_path = "./images/".$image;
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
       if(move_uploaded_file($img_tmp_name,$img_path)){
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
    $image = $_FILES["image"]["name"];
    $img_temp_name = $_FILES['image']['tmp_name'];
    $img_path = "./images/" . $image;
    $date = date('Y-m-d');
    if(move_uploaded_file($img_temp_name,$img_path)){
        //inserting into the database
        $insert_query = mysqli_query($connection, "INSERT INTO service_seller (company_name, email, company_location, phone_number, `description`, payment_mode, account_number, logo,`password`,`date`)  ('$companyName', '$email', '$companyLocation', '$phoneNumber', '$description', '$paymentMode', '$accountNumber', '$image','password($password)','$date')");

        if($insert_query){
            $response = [
                'status' => 200,
                'message' => "Registeration successfull"
            ];
        }else{
            $response = [
                'status' => 404,
                'message' => "Unable to register user"
            ];
        }
    }
    header('Content-type: application/json');
    echo json_encode($response);  
}

//contact us messages
//contact us messages
if(isset($_POST["Contact"])){
    //accepting input from the user
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];
    $date = date("Y-m-d");

    //inserting the messsage into the database
    $message_insert_query = mysqli_query($connection, "INSERT INTO `messages` (name,email,number,message, date) VALUES ('$name', '$email','$number', '$message', '$date')");

    if($message_insert_query){
        $response = [
            'status' => 2000,
            'message' =>  'Message sent successfull'
        ];
    }else{
        $response = [
            'message' =>  'Unable to send message'
        ];
    }

    header("content-type:application/json");
    echo json_encode($response);
}
  
?>