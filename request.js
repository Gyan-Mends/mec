//User registeration request
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
