//User registeration request
//User registeration request
$("#register").click(function (e) {
    //prventing the default behaviour of the form
    e.preventDefault();

    //accepting input  fro the form
    var name = $("#name").val();
    var image = $("#image").val();
    var number = $("#number").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var cpassword =  $("#cpassword").val();
    console.log(cpassword)

    //asking the user if he wants to submit the form
    Swal.fire({
        icon: "question",
        title: "Are you sure to submit the form?",
        showConfirmButton: true,
        confirmButtonText: "Yes",
        showCancelButton: true,
        cancelButtonText: "No"
    }).then((result) => {
        if (result.isConfirmed) {
            //checking the the input field ust not be empty
            if(name == '' || password=='' || number=='' || email == '' || image == '' || cpassword == ''){
                Swal.fire({
                    icon: "error",
                    title: "All inputs must be provided",
                    timer: 2000,
                    position: 'top-end'
                });
            }else{
                if(password == cpassword){
                    $.ajax({
                        url: "./api.php",
                        type: "POST",
                        data: {
                            email: email,
                        },
                        success: function (response) {
                            if (response.status == 500) {
                                Swal.fire({
                                    icon: "error",
                                    title: "User already exists",
                                    timer: 2000
                                });
                            } else {
                                // Proceed with user registration
                                $.ajax({
                                    url: "./api.php",
                                    type: "POST",
                                    data: {
                                        name: name,
                                        image : image,
                                        cpassword : cpassword,
                                        number: number,
                                        email: email,
                                        password: password,
                                        register: "register"
                                    },
                                    success: function (response) {
                                        if (response.status == 200) {
                                            Swal.fire({
                                                icon: "success",
                                                title: "User registration successful",
                                                timer: 2000,
                                                position: "top-end"
                                            });
                                        } else {
                                            showRegistrationError();
                                        }
                                    },
                                    error: function () {
                                        showRegistrationError();
                                    }
                                });
                            }
                        },
                        error: function () {
                            showGenericError();
                        }
                    });
                }else{
                    Swal.fire({
                        icon : "error",
                        title : "password does not match"
                    })
                    
                }
            }
        } else {
            Swal.fire({
                icon: "error",
                title: "Form submission has been canceled",
                timer: 2000,
                position: "top-end"
            });
        }
    });

    function showRegistrationError() {
        Swal.fire({
            icon: "error",
            title: "User with the same email already exist",
            timer: 2000,
            position: "top-end"
        });
    }

    function showGenericError() {
        Swal.fire({
            icon: "error",
            title: "An error occurred",
            text: "Please try again later.",
            timer: 2000,
            position: "top-end"
        });
    }
});


//User login authentication
//User login authentication
$("#login").click(function (e){
    //preventing the default behaviour of the form
    e.preventDefault()

    Swal.fire({
        html : `<form >
        <div class="flex justify-center items-center ">
            <h1 class="text-2xl">Login</h1>
        </div>

        <label for="" class="-ml-[280px]  text-sm">Email</label><br>
        <input class="h-9 w-80 rounded border border-blue-300 outline-none pl-2 text-sm" id="email" type="text" placeholder="enter email"><br><br>

        <label class="-ml-[250px]  text-sm">Password</label><br>
        <input type="text" class="h-9 border border-blue-300 w-80 rounded outline-none pl-2 text-sm" id="password" placeholder="enter password"><br>

        <div class=" text-center pt-1 text-red-500">
            <a class="text-sm ml-[200px] " href="">Forgot Password</a>
        </div><br>

        <p class=" text-[13px]">Don't have an account? <a class="text-blue-500" href="sign_up.html"> SIGN UP</a></p>
    </form>`,
    showConfirmButton : true,
    confirmButtonText : 'LOGIN',
    showCancelButton : true,
    cancelButtonText : "BACK"
    }).then(function(result){
        if(result.isConfirmed){
            
    //reading data from the  input field
    var email = $("#email").val()
    var password = $("#password").val()

    //asking the user if he wants to log in
    Swal.fire({
        icon: "question",
        title: "Are you sure to login",
        showConfirmButton: true,
        confirmButtonText:"Yhep",
        showCancelButton:true,
        cancelButtonText: "Nhop"
    }).then(function (result){
        if(result.isConfirmed) {
            if(email== "" || password== ""){
                Swal.fire({
                    icon:"error",
                    title:"All inputs are required",
                    timer:2000,
                    position:"top-end"
                })
            }else{
                $.ajax({
                    url:"./api.php",
                    type:"POST",
                    data: {
                        email:email,
                        password:password,
                        login:"login"
                    },
                    success: function(response) {
                        if (response.status === 200) {
                            // Redirect user on status 200
                            window.location.href = "./users/users_daashboard.php";
                        } else if (response.status === 300) {
                            // Redirect user on status 300
                            window.location.href = "./admin/admin_dashboard.php ";
                        } else {
                            // Show error message for other statuses
                            Swal.fire({
                                icon: "error",
                                title: "Unable to login",
                                timer: 2000,
                                position: "top-end"
                            });
                        }
                    }
                    
                })
            }
        }else{
            Swal.fire({
                icon: 'error',
                title:"Login cancelled",
                timer:2000,
                pisition:"top-end"
            })
        }
    })
        }
    })

})

//Service seller account request
//Service seller account request
$("#serviceSeller").click(function (e){
    //prevnting the default behavior of the form
    e.preventDefault()

    //accepting input from the service seller
    var companyName = $("#companyName").val()
    var email = $("#email").val()
    var companyLocation = $("#companyLocation").val()
    var phoneNumber = $("#phoneNumber").val()
    var file = $("#image")[0].files[0];
    // Create a new FormData object
    var formData = new FormData();
    // Append the file to the formData object
    formData.append("image", file);
    var description = $("#description").val()
    var paymentMode = $("#paymentMode").val()
    var accountNumber = $("#accountNumber").val()
    var password = $("#password").val()
    var confirmPassword = $("#confirmPassword").val()
    var term = $("#term").prop("checked")

    //checking if the terms and conditions has been acepted
    Swal.fire({
        icon: "question",
        title: "Are you sure to register",
        showConfirmButton: true,
        confirmButtonText:"Yhep",
        showCancelButton:true,
        cancelButtonText: "Nhop"
    }).then(function (result){
        if(result.isConfirmed){
            if(term){
                if(companyName == "" || email == "" || companyLocation == "" || phoneNumber == "" || image == "" || description == "" ||paymentMode== "" || accountNumber == "" || password == "" || confirmPassword === ""){
                    Swal.fire({
                        icon: "question",
                        title: "All input fields are required ",
                        position:'top-end'
                    }) 
                }else{
                   if(password == confirmPassword){
                    $.ajax({
                        url: "./api.php",
                        type: "POST",
                        data: {
                           companyName:companyName,
                           email:email,
                           companyLocation:companyLocation,
                           phoneNumber:phoneNumber,
                           data: formData, // The data to send
                           contentType: false, // Tell jQuery not to set the content type header
                           processData: false,
                           description:description,
                           paymentMode:paymentMode,
                           accountNumber:accountNumber,
                           password:password,
                           confirmPassword:confirmPassword,
                           serviceSeller : "serviceSeller"
    
                        },
                        success:function(response){
                            if(response.status == 200){
                                Swal.fire({
                                    icon: "success",
                                    title: " Registeration Successfull",
                                    position:'top-end'
                                }) 
                            }else{
                                Swal.fire({
                                    icon: "error",
                                    title: " Registeration Failed",
                                    position:'top-end'
                                }) 
                            }
                        }
                       })
                }else{
                    Swal.fire({
                        icon: "error",
                        title: "Password does not match",
                        position:'top-end'
                    }) 
                   }
                }
            }else{
                Swal.fire({
                    icon: "error",
                    title: "Terms and conditions must be accepted",
                    position:'top-end'
                }) 
            }
        }
    })
})

//contact us request
//contact us request
$("#contact").click(function(event){
    // preventing the default behaviour of the form
    event.preventDefault()

    // accepting form input
    var name = $("#name").val()
    var email = $("#email").val()
    var number = $("#number").val()
    var message = $("#message").val()

  // confirming from the user if he/she really want to submit the form
  Swal.fire({
    icon : "question",
    title : "Are you sure to submit the form",
    showConfirmButton : "true",
    confirmButtonText : "Yes",
    showCancelButton : "true",
    cancelButtonText : "No" 
  }).then(function(result){
    if(result.isConfirmed){
        $.ajax({
            url : "./api.php",
            type : "POST",
            data : {
                name : name,
                email : email,
                number: number,
                message : message,
                Contact : "Contact"
            },
            success: function(response){
                if(response.status == 2000){
                    Swal.fire({
                        icon : "success",
                        title : "Message sent successfully"
                    })
                }else{
                    Swal.fire({
                        icon : "error",
                        title : "Unable to send message"
                    })
                }
            }
        })
    }
  })
})