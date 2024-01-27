<?php
//starting session
//starting session
session_start();

//dbConnection
//dbConnection
include("dbConnection.php");
?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICES CATEGORIES</title>

    <!-- assets -->
    <!-- assets -->
    <link rel="stylesheet" href="Assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="Assets/fonts/fonts.css">
    <link rel="stylesheet" href="nav.css">
    <!-- script -->
    <!-- script -->
    <script src="Assets/tailwind.js"></script>

    <script>
        //nav toggle function
        //nav toggle function
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className == "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        //Search fucntion
        //Search fucntion
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

<body style="font-family: poppins; overflow-x:hidden" class="bg-gray-800 pt-6 pl-6 pr-6">
    <!-- navigation bar -->
    <!-- navigation bar -->
    <div class="topnav lg:!ml-auto register" id="myTopnav">
        <a class="a !text-blue-100 hover:!text-white p-2 text-[14px]" href="index.php">Home</a>
        <a class="a !text-blue-100 hover:!text-white p-2 text-[14px]" href="contact.html">Contact</a>
        <a class="a !text-blue-100 hover:!text-white p-2 text-[14px]" href="about.html">About</a>
        <a class="a !text-blue-100 hover:!text-white p-2 text-[14px]" href="services.php">Services</a>
        <a class="a !text-blue-100 hover:!text-white p-2 text-[14px]" href="login.html">Login</a>
        <input type="text" id="search-input" class="lg:float-right lg:-mt-2 md:float-right md:-mt-2  h-7 w-60 pl-2 rounded outline-none placeholder:text-sm" placeholder="Enter service to search" onkeyup="display()" placeholder="Search">
        <a href="javascript:void(0)" class="icon hidden a -mt-4 mt-2 text-white" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="mt-4 h-[0.1px] bg-gray-500"></div>

    

    <!-- categories -->
    <!-- categories -->
    <div class="pt-4  w-[100vw]  flex overflow-x-scroll lg:overflow-x-hidden ">
        <?php
        $select_query = mysqli_query($connection, "SELECT * FROM s_categories");
        while ($rows = mysqli_fetch_array($select_query)) {
        ?>
            <a href=""><button class="bg-blue-600 rounded-full p-1 text-[13px] w-max ml-2 text-blue-100"><?php echo $rows["name"] ?></button></a>
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


        <!--footer -->
    <!--footer -->
    <footer class="bg-gray-900 text-gray-300 py-8 mt-20 -mr-6 -ml-6 ">
        <div class="container mx-auto px-10 lg:grid lg:grid-cols-3 md:grid md:grid-cols-3 gap-20">
            <div class="">
                <h2 class="text-lg mb-4">Contact Us</h2>
                <p class="mb-2  text-[12px]"><i class="fas fa-map-marker-alt mr-2"></i>123 Main St, Anytown USA</p>
                <p class="mb-2 text-[12px]"><i class="fas fa-phone mr-2"></i>555-555-5555</p>
                <p class="mb-2 text-[12px]"><i class="fas fa-envelope mr-2"></i>info@serviceorder.com</p>
            </div>
            <div class="mt-8 md:mt-0 lg:mt-0">
                <h2 class="text-lg  mb-4">Services</h2>
                <ul class="list-disc pl-4">
                    <li class="mb-2 text-[12px]"><a href="#">Oil Changes</a></li>
                    <li class="mb-2 text-[12px]"><a href="#">Tire Rotation</a></li>
                    <li class="mb-2 text-[12px]"><a href="#">Brake Repair</a></li>
                    <li class="mb-2 text-[12px]"><a href="#">Engine Diagnostics</a></li>
                </ul>
            </div>
            <div class="mt-8  md:mt-0 lg:mt-0">
                <h3 class="text-lg mb-4">Follow Us</h3>
                <div class="flex items-center mb-2">
                    <i class="fab fa-facebook-square mr-2"></i>
                    <a class="text-[12px]" href="#">Facebook</a>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-twitter-square mr-2"></i>
                    <a class="text-[12px]" href="#">Twitter</a>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-instagram-square mr-2"></i>
                    <a class="text-[12px]" href="#">Instagram</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>