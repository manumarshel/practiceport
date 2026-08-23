$(function () {

    const validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };

    $('#create_user_account').on('submit', function (e) {
        e.preventDefault();
        $('#show-errors').html('').hide();
        let action = baseUrl + "/create";
        let empty = false;
        $('#create_user_account input').each(function () {
            if ($(this).val() === "") {
                console.log($(this))
                empty = true;
                return false;
            }
        });

        let email = $('input[type="email"]').val();
        if (empty) $('#show-errors').html('All fields are mandatory').show();
        else {
            let password = $('input[name="password"]').val();
            let cpassword = $('input[name="cpassword"]').val();
            if ( validateEmail(email)) {
                if ( password ===  cpassword) {
                    if ( password.length >= 8) {
                        let formData = $(this).serialize();
                        $.ajax({
                            method: "POST",
                            url: action,
                            dataType: 'json',
                            data: formData,
                            cache: false
                        }).done(function (msg) {
                            $('#show-errors').html('Registration Completed Successfully').show();
                            window.location.href = baseUrl;
                            console.log("success");
                        }).fail(function (response) {
                            $('#show-errors').html(response.responseJSON.msg).show();
                            console.log("error");
                        });
                    } else {
                        $('#show-errors').html('Password should be at least 8 characters').show();
                    }
                } else {
                    $('#show-errors').html('Password does not match').show();
                }

            } else {
                $('#show-errors').html('Invalid email').show();
                console.log("Invalid email")
            }

        }
    })

    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        input = $(this).parent().find("input");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".toggle-cpassword").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        input = $(this).parent().find("input");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
});
