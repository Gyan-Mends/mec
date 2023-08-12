<?php
//starting session
//starting session
session_start();

//dbConnection
//dbConnection
include("dbConnection.php");

if (isset($_POST["submit"])) {
    //fetching data from the forms
    //fetching data from the forms
    $catName = $_POST["catName"];
    $description = $_POST["description"];
    $date = date("Y-m-d");

    //insertting data into the database
    //insertting data into the database
    $insert = mysqli_query($connection, "INSERT INTO s_categories (`name`,`description`,`date`) VALUES ('$catName','$description','$date')");
    if ($insert) {
        echo "
        <script>;
            alert('New caategory inserted');
            window.location.href='categories.php';
        </script>;
    ";
    } else {
        echo "
        <script>;
            alert('Unable to add new category');
            window.location.href='category_add.php';
        </script>;
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- assets -->
    <!-- assets -->
    <link rel="stylesheet" href="Assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="Assets/fonts/fonts.css">
    <link rel="stylesheet" href="nav.css">
    <!-- script -->
    <!-- script -->
    <script src="Assets/tailwind.js"></script>

    <script>
        function display() {
            const searchInput = document.querySelector('#search-input');
            const container = document.querySelector('#container');

            searchInput.addEventListener('input', () => {
                const searchTerm = searchInput.value.toLowerCase();
                const items = container.querySelectorAll('.item');

                items.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        }
    </script>
</head>

<body style="font-family: poppins; overflow-x:hidden" class="bg-gray-800 ">
    <div class="flex-1 flex-col justify-between ">

        <div class="text-white ">
            <!-- side navigation bar for big screen-->
            <!-- side navigation bar for big screen-->
            <div class="lg:bg-gray-600 md:bg-gray-600 flex-col justify-between lg:w-60 md:w-60 h-screen absolute hidden lg:block md:block">

                <!--nav contents -->
                <div class="p-8 ">
                    <a href="index.php">
                        <div class="flex gap-4">
                            <i class="fa fa-paw text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Dashboard</p>
                        </div>
                    </a>
                    <a href="index.php">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-house-blank text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Home</p>
                        </div>
                    </a>
                    <a href="">
                        <div class=" flex gap-4 mt-4">
                            <i class="fa-solid fa-cart-shopping text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Carts</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa-regular fa-book-user text-[20px] text-gray-50"></i>
                            <p class="text-blue-50 ">Services</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa fa-users text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Users</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa-solid fa-cart-shopping text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Orders</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa fa-users text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Categories</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa fa-book text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Bookings</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa-solid fa-hand-holding-dollar text-[20px] text-gray-50"></i>
                            <p class="text-blue-50">Payments</p>
                        </div>
                    </a>
                </div>
                <!-- logout -->
                <!-- logout -->
                <div class="h-10 bg-gray-900 bottom-0 fixed w-60 text-black p-2 flex">
                    <div>
                        <p class="text-blue-50">
                            LOGOUT
                        </p>
                    </div>
                    <div class="ml-auto pl-8">
                        <i class="fa-solid fa-right-from-bracket text-[22px] text-blue-50"></i>
                    </div>
                </div>
            </div>


            <!-- page content -->
            <div class="ml-4 lg:ml-72 md:ml-72  pt-6 pr-6">
                <!-- top navigation bar -->
                <!-- top navigation bar -->
                <div class="h-12 bg-gray-600 rounded-xl flex">
                    <div class="flex p-3">
                        <p>Categories</p>
                    </div>
                    <div class="ml-auto flex pr-4">
                        <div class="h-9 w-9 rounded-full bg-blue-800 mt-2">

                        </div>
                        <p class="mt-3 ml-2">Admin</p>
                    </div>
                </div>

                <!-- forms -->
                <!-- forms -->
                <form class="flex h-[80vh] justify-center items-center gap-10" action="" method="post">
                    <div>
                        <label for="">Cat. Name</label><br>
                        <input name="catName" class="h-9 w-80 rounded-md pl-2 outline-none text-black" placeholder="Category name" type="text"><br><br>
                        <label for="">Description</label><br>
                        <textarea name="description" id="" class="text-black outline-none p-2 rounded-md w-80" placeholder="Enter category description here" rows="5"></textarea>

                        <div class="text-center"><br><br>
                            <input class="h-9 w-40 bg-blue-600 m-auto rounded-sm" name="submit" type="submit" value="Add Cat">
                        </div>
                    </div>

                </form>

            </div>
        </div>



        <!-- navigaation bar for small screen -->
        <!-- navigaation bar for small screen -->
        <div class=" bottom-0  bg-gray-900 w-sreen fixed lg:hidden md:hidden w-screen overflow-x-scroll  h-[70px] gap-[5rem]  pr-8 grid grid-cols-8">
            <a href="index.php">
                <div class="w-12 text-center">
                    <i class="fa-solid fa-house-blank text-[20px] text-gray-50"></i>
                    <p class="text-blue-100">Home</p>
                </div>
            </a>
            <a href="">
                <div class="w-12 text-center">
                    <i class="fa-solid fa-cart-shopping text-[20px] text-gray-50"></i>
                    <p class="text-blue-100">Carts</p>
                </div>
            </a>
            <a href="">
                <div class="w-12 text-center pr-4">
                    <i class="fa-regular fa-book-user text-[20px] text-gray-50"></i>
                    <p class="text-blue-100 -ml-2">Services</p>
                </div>
            </a>
            <a href="">
                <div class="w-12 text-center">
                    <i class="fa fa-users text-[20px] text-gray-50"></i>
                    <p class="text-blue-100">Users</p>
                </div>
            </a>
            <a href="">
                <div class="w-12 text-center">
                    <i class="fa-solid fa-cart-shopping text-[20px] text-gray-50"></i>
                    <p class="text-blue-50">Orders</p>
                </div>
            </a>
            <a href="">
                <div class="w-12 text-center">
                    <i class="fa fa-users text-[20px] text-gray-50"></i>
                    <p class="text-blue-50">Cats</p>
                </div>
            </a>
            <a href="">
                <div class="w-12 text-center">
                    <i class="fa fa-book text-[20px] text-gray-50"></i>
                    <p class="text-blue-50">Bookings</p>
                </div>
            </a>
            <a href="">
                <div class="w-12 ml-2 text-center">
                    <i class="fa-solid fa-hand-holding-dollar text-[20px] text-gray-50"></i>
                    <p class="text-blue-50">Payments</p>
                </div>
            </a>
        </div>
    </div>

</body>

</html>