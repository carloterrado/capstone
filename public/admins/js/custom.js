$(function(){
    $('.menu').on('click', function()
    {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.bx-chevron-right').toggleClass('rotate-90');
    });
    


    // Validation function for password

    function validatePassword(newPasswordID,errorElementID)
    {
        let newpass = $(newPasswordID).val();
        if(newpass.length == 0)
        {
            $(errorElementID).html('Please enter a value');
            return false;
        }
        const isWhitespace = /^(?=.*\s)/;
        if (isWhitespace.test(newpass)) {
            $(errorElementID).html('Input must not have space.');
            return false;
        }
    
        const isContainsUppercase = /^(?=.*[A-Z])/;
        if (!isContainsUppercase.test(newpass)) {
            $(errorElementID).html('Required a Uppercase Character.');
            return false;
        }
    
        const isContainsLowercase = /^(?=.*[a-z])/;
        if (!isContainsLowercase.test(newpass)) {
            $(errorElementID).html('Required a Lowercase Character.');
            return false;
        }
    
        const isContainsNumber = /^(?=.*[0-9])/;
        if (!isContainsNumber.test(newpass)) {
            $(errorElementID).html('Required a Digit.');
            return false;
        }
        const isValidLength = /^.{6,20}$/;
        if (!isValidLength.test(newpass)) {
            $(errorElementID).html('Input must be 10-16 Characters Long.');
            return false;
        }

        $(errorElementID).html('');
        return true;

    }


    // Validation input for confirm password

    function validateConfirmPassword(newPasswordID,confirmPasswordID,errorElementID)
    {
        let newpass = $(newPasswordID).val();
        let confirmpass = $(confirmPasswordID).val();
        if(confirmpass.length == 0)
        {
            $(errorElementID).html('Confirm password is required');
            return false;
        }
        if(confirmpass !== newpass)
        {
            $(errorElementID).html('Confirm password not match');
            return false;
        }
        $(errorElementID).html('');
        return true;

    }


   
//    Change Admin and Owner Password

    $('#update-password').on('click', function(event)
    {
        if(event.target === this)
        {
           $('input').next().html('');
           $('input').val('');
        }
    });
    $('.close-btn').on('click', function()
    {
           $('input').next().html('');
           $('input').val('');
    });
   
    //  check if admin current password input is correct
    $("#current-password").on("keyup", async function () 
    {
        var current_password = $("#current-password").val();
       await $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            url: "/admin/check-admin-password",
            data: { current_password: current_password },
            success: function (resp) {
                if (resp === "false") {
                    $("#current-pass-error").html('Wrong password');
                } else {
                    // $("#current-pass-error").html('');
                    validatePassword('#current-password','#current-pass-error');
                }
            },
            error: function () {
                $('#error-message').show();
                $("#error-text").html('Current password not found');
                setTimeout(function(){
                    $('#error-message').show();
                },3000)
            },
        });
    });
    $('#new-password').on('keyup keypress',function()
    {
        validatePassword('#new-password','#new-pass-error');
    })
    $('#confirm-password').on('keyup keydown',function()
    {
        validateConfirmPassword('#new-password','#confirm-password','#confirm-pass-error');
    })
    // validate the form before the form upon submission 
    $('#change-pass-form').on('submit', function(event)
    {
        event.preventDefault();

        function validateChangePassForm()
        {  
            let valid = validatePassword('#current-password','#current-pass-error') &&  validatePassword('#new-password','#new-pass-error') && validateConfirmPassword('#new-password','#confirm-password','#confirm-pass-error');
                if(!valid)
                { 
                    $('#submit-error').show();
                    $('#submit-error').text('Please fill up the form correctly');
                    setTimeout(function()
                    {
                        $('#submit-error').hide();
                    },3000);
                    return false;
                }
                return true;
        }
       async function submitPassword()
       {
            var new_password = $("#new-password").val();
            var current_password = $("#current-password").val();
            await $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: "POST",
                url: "/admin/update-password",
                data: { new_password: new_password, current_password: current_password},
                success: function (resp) {
                    if (resp["status"] === 'false') {
                        $('#error-message').show();
                        $("#error-text").html('Current password is invalid!');
                        setTimeout(function(){
                            $('#error-message').hide();
                        },3000)
                    } else {
                        $('#success-message').show();
                        $("#success-text").html('Password updated successfully!');
                        $('input').val('');
                        setTimeout(function(){
                            $('#success-message').hide();
                        },3000)
                    }
                },
                error: function () {
                    $('#error-message').show();
                    $("#error-text").html('Update password failed!');
                    setTimeout(function(){
                        $('#error-message').show();
                    },3000)
                },
            });
        }
        const validated = validateChangePassForm()
        if(validated){
            submitPassword().catch(function(error){
                $('#error-message').show();
                $("#error-text").html('Update password failed!');
                setTimeout(function(){
                    $('#error-message').show();
                },3000)
            });
        }      
    });


});