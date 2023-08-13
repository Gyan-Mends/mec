//User registeration request

const { type } = require("os");

//User registeration request
$("#submit").click(function (e) {
    //prventing the default the default behaviour of the for
    e.preventDefault();

    //accepting input  fro the form
    var name = $("#name").val();
    var number = $("#number").val();
    var email = $("#email").val();
    var password = $("#password").val();

    //asking the user if he wants to submit the form
    Swal.fire({
        icon: "question",
        title: "Are you sure to submit the form?",
        showConfirmButton: true,
        confirmButtonText: "Yep",
        showCancelButton: true,
        cancelButtonText: "Nope"
    }).then((result) => {
        if (result.isConfirmed) {
            //checking the the input field ust not be empty
            if(name == '' || password=='' || number=='' || email == ''){
                Swal.fire({
                    icon: "error",
                    title: "All inputs must be provided",
                    timer: 2000,
                    position: 'top-end'
                });
            }else{
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
//User login authentication
//User login authentication
$("#login").click(function (e){
    //preventing the default behaviour of the form
    e.preventDefault()

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
})

//Service seller account request
//Service seller account request
//Service seller account request
//Service seller account request
$("#serviceSeller").click(function (e){
    //prevnting the default behavior of the form
    e.preventDefault()

    //accepting inptu from the user
    var companyName = $("#companyName").val()
    var email = $("#email").val()
    var companyLocation = $("#companyLocation").val()
    var phoneNumber = $("#phoneNumber").val()
    var logo = $("#logo").val()
    var description = $("#description").val()
    var paymentMode = $("#paymentMode").val()
    var accountNumber = $("#accountNumber").val()
    var password = $("#password").val()
    var confirmPassword = $("#confirmPassword").val()
    var term = $("#term").prop("checked")

    //checking if the terms and conditions has been acepted
    Swal.fire({
        icon: "question",
        title: "Are you sure to login",
        showConfirmButton: true,
        confirmButtonText:"Yhep",
        showCancelButton:true,
        cancelButtonText: "Nhop"
    }).then(function (result){
        if(result.isConfirmed){
            if(term){
                if(companyName == "" || email == "" || companyLocation == "" || phoneNumber == "" || logo == "" || description == "" ||paymentMode== "" || accountNumber == "" || password == "" || confirmPassword === ""){
                    Swal.fire({
                        icon: "question",
                        title: "All input fields are required ",
                        position:'top-end'
                    }) 
                }else{
                   if(password == confirmPassword){
                    $.ajax({
                        url:"./api.php",
                        type:"POST",
                        data: {
                           companyName:companyName,
                           email:email,
                           companyLocation:companyLocation,
                           phoneNumber:phoneNumber,
                           logo:logo,
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
                    icon: "question",
                    title: "Terms and conditions must be accepted",
                    position:'top-end'
                }) 
            }
        }
    })
})
