<?php
    //starting session
    //starting session
    session_start();

    //dbConnection
    //dbConnection
    include("../dbConnection.php");
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
    <link rel="stylesheet" href="../Assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../Assets/fonts/fonts.css">
    <link rel="stylesheet" href="nav.css">
    <!-- script -->
    <!-- script -->
    <script src="../Assets/tailwind.js"></script>

    <style>
        /* Set the scrollbar height */
        ::-webkit-scrollbar {
            height: 4px;
        }

        /* Style the scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: rgba(79, 70, 229, 0.5);
            border-radius: 999px;
        }

        /* Style the scrollbar track */
        ::-webkit-scrollbar-track {
            background-color: rgba(79, 70, 229, 0.1);
        }
    </style>
    <!-- search button-->
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
            <div class="lg:bg-gray-700 md:bg-gray-700 flex-col justify-between lg:w- md:w-60 h-screen absolute hidden lg:block md:block shadow-sm">

                <!--nav contents -->
                <div class="p-8 ">
                    <a href="../index.html">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-house-blank text-sm text-gray-50"></i>
                            <p class="text-blue-50 text-sm">Home</p>
                        </div>
                    </a>
                    <a href="">
                        <div class=" flex gap-4 mt-4">
                            <i class="fa-solid fa-cart-shopping text-sm text-gray-50"></i>
                            <p class="text-blue-50 text-sm text-sm">Dashboard</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa-regular fa-book-user text-sm text-gray-50"></i>
                            <p class="text-blue-50  text-sm">Services</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa fa-users text-sm text-gray-50"></i>
                            <p class="text-blue-50 text-sm">Users</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa-solid fa-cart-shopping text-sm text-gray-50"></i>
                            <p class="text-blue-50 text-sm">Orders</p>
                        </div>
                    </a>
                    <a href="categories.php">
                        <div class="flex gap-4 mt-4">
                            <i class="fa fa-users text-sm text-gray-50"></i>
                            <p class="text-blue-50 text-sm">Categories</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa fa-book text-sm text-gray-50"></i>
                            <p class="text-blue-50 text-sm">Bookings</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-4 mt-4">
                            <i class="fa-solid fa-hand-holding-dollar text-sm text-gray-50"></i>
                            <p class="text-blue-50 text-sm">Payments</p>
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
            <div class="lg:ml-60 md:ml-60 pt-6">
                <!-- search button -->
                <!-- search button -->
                <input type="text" id="search-input" class=" lg:hidden ml-4 h-9 w-80 pl-2 rounded-lg outline-none text-black" placeholder="Enter service to search" onkeyup="display()" placeholder="Search">

                <!-- categories -->
                <!-- categories -->
                <div class="pt-4  flex overflow-x-scroll">
                    <?php
                    $select_query = mysqli_query($connection, "SELECT * FROM s_categories");
                    while ($rows = mysqli_fetch_array($select_query)) {
                    ?>
                        <a href=""><button class="bg-blue-600 rounded-full p-1 text-[13px] w-max"><?php echo $rows["name"] ?></button></a>
                    <?php
                    }
                    ?>
                </div>

                <!-- services -->
                <!-- services -->
                <div id="container" class="mt-8 text-center flex gap-6 pr-6 pl-6">
                    <div class="w-[150px] item">
                        <img class="w-[150px] h-[150px] rounded-lg" src="images/engine-oil-leak.webp" alt="">
                        <p class="mt-2 text-blue-50">Engine oil leak</p>
                        <p class="mt-1 text-blue-50">GHC 40</p>
                        <button class="h-9 w-max bg-blue-600 rounded-md pl-1 pr-1 text-white">Add to Cart</button>

                    </div>
                    <div class="w-[150px] item">
                        <img class="w-[150px] h-[150px] rounded-lg" src="images/engine-oil-leak.webp" alt="">
                        <p class="mt-2 text-blue-50">Engine oil leak</p>
                        <p class="mt-1 text-blue-50">GHC 40</p>
                        <button class="h-9 w-max bg-blue-600 rounded-md pl-1 pr-1 text-white">Add to Cart</button>

                    </div>

                </div>
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
            <a href="categories.php">
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