<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Odering || index || Home Page</title>

    <!-- assets -->
    <!-- assets -->
    <link rel="stylesheet" href="Assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="Assets/fonts/fonts.css">
    <link rel="stylesheet" href="nav.css">
    

    <!-- script -->
    <!-- script -->
    <script src="Assets/tailwind.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className == "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</head>

<body style="font-family: poppins;" class="bg-gray-800 pt-6 pl-6 pr-6">
    <!-- navigation bar -->
    <!-- navigation bar -->
    <div class="topnav lg:!ml-auto register" id="myTopnav">
        <a class="a !text-blue-100 hover:!text-white p-2" href="index.php">Home</a>
        <a class="a !text-blue-100 hover:!text-white p-2" href="#">Contact</a>
        <a class="a !text-blue-100 hover:!text-white p-2" href="#">About</a>
        <a class="a !text-blue-100 hover:!text-white p-2" href="services.php">Services</a>
        <a class="a !text-blue-100 hover:!text-white p-2" href="login.php">Order Services</a>
        <a href="javascript:void(0)" class="icon hidden a -mt-4 text-white" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="mt-4 h-[0.1px] bg-gray-500"></div>
    
    <!-- Becoming a service seller -->
    <!-- Becoming a service seller -->
    <div class="grid grid-cols-1 mt-4 mb-16  sm:gap-10">
        <div class="lg:h-80 sm:h-[400px] bg-blue-600 grid grid-cols-1 lg:grid-cols-2  p-10 rounded-sm">
            <div class="">
                <img class="lg:h-[310px] w-[600px] sm:!h-[300px]" src="images/cleaning.jpg" alt="">
            </div>
            <div class="sm:ml-4 lg:pl-8 sm:mt-6 ">
                    <p class="lg:!text-[25px]   sm:!text-[16px] text-white">Become a service seller!</p>
                    <p class="text-[18px] mt-4 text-white">Get more money using your skills</p>
                    <a href="service-seller-registeration.php"><button class="bg-blue-100 h-10 w-[180px] mt-6 rounded-md">Create Now</button></a>
            </div>
        </div>
   </div>

   <!-- services categories -->
   <!-- services categories -->
   <div class="pl-40 pr-40 pt-8 pb-12">
        <div class="lg:grid lg:grid-cols-3 gap-20">
            <!-- house chores-->
            <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa fa-home text-[25px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] -ml-4">
                        House Chores
                    </p>
                </div>
            </div>

            <!-- house chores-->
            <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-solid fa-trowel-bricks text-[25px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] -ml-4">
                        Construction
                    </p>
                </div>
            </div>

             <!-- house chores-->
             <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-solid fa-person-chalkboard text-[29px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] ">
                        Teaching
                    </p>
                </div>
            </div>

        </div>


        <div class="lg:grid lg:grid-cols-4 gap-20 mt-10">
            <!-- house chores-->
            <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-solid fa-car-wrench text-[25px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] -ml-4">
                        Mechanics
                    </p>
                </div>
            </div>

            <!-- house chores-->
            <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-sharp fa-solid fa-spa text-[29px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] ">
                        Massage
                    </p>
                </div>
            </div>

             <!-- house chores-->
             <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-solid fa-plug text-[29px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] ">
                        Electricals
                    </p>
                </div>
            </div>

             <!-- house chores-->
             <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                    <i class="fa-solid fa-objects-column text-[29px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] ml-4">
                        More
                    </p>
                </div>
            </div>
            
        </div>
       
   </div>
  

    <div class="grid grid-cols-1 lg:grid-cols-2 pt-8">
        <div class="">
            <p class="text-white text-[30px]">
                All the services you needed are <br> right at you finger tips
            </p>
            <p class="mt-6 text-gray-400 text-[14px]">
                Delivering the highest quality  services is the  way we forgo<br> relationships with our customers and the way we <br> have always done business
            </p>
            <button class="h-9 bg-blue-600 w-[200px] mt-4 rounded-md text-white">Contact Us</button>
            <div class="flex mt-8 gap-20 pb-10">
                <div class="text-center">
                    <p class="text-[25px] text-white">389</p>
                    <p class="text-gray-400 text-[13px]">Experienced <br> Technician</p>
                </div>
                <div class="text-center ">
                    <p class="text-[25px] text-white">38934</p>
                    <p class="text-gray-500 text-[13px]">Projects <br> Completed</p>
                </div>
            </div>
        </div>
        <div class="">
            <img class="lg:h-[360px] h-[320px] w-screen " src="images/auto-mechanic-working-in-garage-repair-service.webp" alt="">
        </div>
    </div>
    <div class="mt-4 h-[0.1px] bg-gray-500"></div>


    <!-- services -->
    <!-- services -->
    <div class="grid grid-cols-1 lg:grid-cols-3 mt-20">
        <div class="h-[150px] border border-gray-500 border-[0.1px] lg:w-[420px] pl-8 pr-8">
            <div class="h-10 w-10 rounded-full bg-gray-800 -mt-[20px] flex items-center justiy-center text-center">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-4"> All services make</p>
            <p class="text-[13px] text-gray-400 ">
                We give an assortment of fix and support administration for all services
            </p>
        </div>
        <div class="h-[150px] border border-gray-500 border-[0.1px] mt-8 lg:mt-0 lg:w-[420px] pl-8 pr-8 lg:ml-2">
            <div class="h-10 w-10 rounded-full bg-gray-800 -mt-[20px] flex items-center justiy-center text-center">
                <i class="fa-brands fa-servicestack text-white m-auto "></i>
            </div>
            <p class="text-white text-20 mt-4"> Variety of services</p>
            <p class="text-[13px] text-gray-400">
                The main principle of our work is to offer a wide scope of value quality services
            </p>
        </div>
        <div class="h-[150px] border border-gray-500 border-[0.1px] lg:w-[420px] pl-8 pr-8 lg:ml-2 mt-8 lg:mt-0 ">
            <div class="h-10 w-10 rounded-full bg-gray-800 -mt-[20px] flex items-center justiy-center text-center">
                <i class="fa-duotone fa-hands-holding-circle m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-4"> Quality Support</p>
            <p class="text-[13px] text-gray-400">
                We offer quality support for any service that allows them to alway stay fully <br> functional
            </p>
        </div>
    </div>

    <!-- booking appointment-->
    <!-- booking appointment-->
    <div class="">
        <div class=" mt-8 bg-[url(images/auto-mechanic-working-in-garage-repair-service.webp)] bg-cover bg-no-repeat bg-h-[500px] lg:h-[500px] w-[80vw] m-auto p-10 grid grid-cols-1 lg:grid-cols-2">
            <div>
                <P class="text-[30px]">
                    Details about our working <br> processes
                </P>
                <button class="h-9 w-[200px] bg-blue-600 mt-10 text-white rounded-sm outline-none">See More</button>
            </div>
            <div class="mt-4 lg:w-[320px] bg-gray-800 lg:ml-40 p-8">
                <div class="flex">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px] text-white ml-4 mt-2"> Book Appointment</p>
                    </a>
                </div>
                <hr class="border-gray-500 mt-2">
                <div class="flex mt-4">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px] text-white ml-4 mt-2">Our Services</p>
                    </a>
                </div>
                <hr class="border-gray-500 mt-2">
                <div class="flex mt-4">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px] text-white ml-4 mt-2">Our services</p>
                    </a>
                </div>
                <hr class="border-gray-500 mt-2">
                <div class="flex mt-4">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px] text-white ml-4 mt-2">Request a service</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- why choose us -->
    <!-- why choose us -->
    <p class="text-white text-[27px] mt-20">Why <br>choose us</p>
    <div class="grid grid-ols-1 lg:grid-cols-3 mt-8">
        <div class="h-[150px] border border-gray-500 border-[0.1px] lg:w-[420px] p-6 text-center">
            <div class="h-10 w-10 rounded-full border border-gray-600  flex items-center justiy-center text-center m-auto">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-1"> Knowledge and <br> Experience</p>

        </div>
        <div class="h-[150px] border border-gray-500 mt-4 lg:mt-0 border-[0.1px] lg:w-[420px] p-6 text-center">
            <div class="h-10 w-10 rounded-full border border-gray-600  flex items-center justiy-center text-center m-auto">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-1"> commitment and <br> Satisfaction</p>

        </div>
        <div class="h-[150px] mt-4 lg:mt-0 border border-gray-500 border-[0.1px] lg:w-[420px] p-6 text-center">
            <div class="h-10 w-10 rounded-full border border-gray-600  flex items-center justiy-center text-center m-auto">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-1"> Quality Service and <br> Quarantteed</p>

        </div>
    </div>

    <!-- top rated -->
    <!-- top rated -->
    <div class="mt-16">
        <p class="text-[27px] text-blue-100">
            Top Rated
        </p>

        <div class="lg:grid lg:grid-cols-4 gap-20 mt-10">
            <!-- house chores-->
            <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-solid fa-car-wrench text-[25px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] -ml-4">
                        Mechanics
                    </p>
                </div>
            </div>

            <!-- house chores-->
            <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-sharp fa-solid fa-spa text-[29px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] ">
                        Massage
                    </p>
                </div>
            </div>

             <!-- house chores-->
             <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                        <i class="fa-solid fa-plug text-[29px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] ">
                        Electricals
                    </p>
                </div>
            </div>

             <!-- house chores-->
             <div class="h-40 bg-blue-200 rounded-lg flex justify-center items-center">
                <div>
                    <div class="h-20 w-20 rounded-full bg-white flex justify-center items-center">
                    <i class="fa-solid fa-objects-column text-[29px] text-blue-600"></i>
                    </div>
                    <p class="text-[18px] ml-4">
                        More
                    </p>
                </div>
            </div>
            
        </div>
    </div>




    <!--footer -->
    <!--footer -->
    <footer class="bg-gray-900 text-gray-300 py-8 mt-20 -mr-6 -ml-6 ">
        <div class="container mx-auto px-10 grid grid-cols-1 lg:grid-cols-3">
            <div class="">
                <h2 class="text-lg font-bold mb-4">Contact Us</h2>
                <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>123 Main St, Anytown USA</p>
                <p class="mb-2"><i class="fas fa-phone mr-2"></i>555-555-5555</p>
                <p class="mb-2"><i class="fas fa-envelope mr-2"></i>info@mechanicorderservice.com</p>
            </div>
            <div class="mt-8 lg:mt-0">
                <h2 class="text-lg font-bold mb-4">Services</h2>
                <ul class="list-disc pl-4">
                    <li class="mb-2"><a href="#">Oil Changes</a></li>
                    <li class="mb-2"><a href="#">Tire Rotation</a></li>
                    <li class="mb-2"><a href="#">Brake Repair</a></li>
                    <li class="mb-2"><a href="#">Engine Diagnostics</a></li>
                </ul>
            </div>
            <div class="mt-8 lg:mt-0">
                <h2 class="text-lg font-bold mb-">Follow Us</h2>
                <div class="flex items-center mb-2">
                    <i class="fab fa-facebook-square mr-2"></i>
                    <a href="#">Facebook</a>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-twitter-square mr-2"></i>
                    <a href="#">Twitter</a>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-instagram-square mr-2"></i>
                    <a href="#">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    

</body>

</html>