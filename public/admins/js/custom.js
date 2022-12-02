$(function(){
    $('.menu').on('click', function()
    {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.bx-chevron-right').toggleClass('rotate-90');
    });

    // toggle for table modal
    // $('.details').on('click', function(event){
    //     if(event.target === this)
    //     {
    //         let id = $('.modal-detail').attr('id');
    //         $('#'+ id).removeClass('hidden');
    //         $('#'+ id).addClass('flex');

    //     }
    // });
   
    // $('.modal-detail').on('click',function(event){
        
    //     if(event.target === this)
    //     {
    //         let id = $('.modal-detail').attr('id');
    //         $('#'+ id).removeClass('flex');
    //         $('#'+ id).addClass('hidden');

    //     }  
            
    // });
    // $('.close').on('click',function(event){
        
    //     if(event.target === this)
    //     {
    //         let id = $('.modal-detail').attr('id');
    //         $('#'+ id).removeClass('flex');
    //         $('#'+ id).addClass('hidden');

    //     }  
            
    // });


    // Form Validation

    // Validation function for first name and last name
    function validateName(nameID,errorElementID,type){
        let name = $(nameID).val();

        if(name.length == 0){
            $(errorElementID).html(type +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!name.match(/^[A-Za-z]*$/ )){
            // /^[A-Za-z]*$/ - characters only
            // /^[A-Za-z]*\s{1}[A-Za-z]*$/  name and lastname
            $(errorElementID).html('Characters only!');
            $(errorElementID).css('color','lightcoral'); 
            return false;
        }
        if( name.length > 20){  
            $(errorElementID).html(type + ' is too long!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html(type);
        $(errorElementID).css('color','black');
        return true;
    }

    // Validation function for email 
    function validateEmail(emailID,errorElementID)
    {
        let email = $(emailID).val();
        let emailcheck = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(email.length === 0)
        {
            $(errorElementID).html('Email is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!email.match(emailcheck))
        {
            $(errorElementID).html('Invalid email!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html('Email');
        $(errorElementID).css('color','black');
        return true;
    }

    //   Validation function for admin type
    function validateType(typeID,errorElementID)
    {
        let validchoice = $(typeID).children('option:selected').val();
        if(validchoice === '')
        {
            $(errorElementID).html('Select a admin type!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html('Admin type');
        $(errorElementID).css('color','black');
        return true;
    }
  
    // Validation function for password
    function validatePassword(newPasswordID,errorElementID)
    {
        let newpass = $(newPasswordID).val();
        if(newpass.length == 0)
        {
            $(errorElementID).css('color','lightcoral');
            $(errorElementID).html('Please enter a value');
            return false;
        }
        const isWhitespace = /^(?=.*\s)/;
        if (isWhitespace.test(newpass)) {
            $(errorElementID).css('color','lightcoral');
            $(errorElementID).html('Input must not have space.');
            return false;
        }
    
        const isContainsUppercase = /^(?=.*[A-Z])/;
        if (!isContainsUppercase.test(newpass)) {
            $(errorElementID).css('color','lightcoral');
            $(errorElementID).html('Required a Uppercase Character.');
            return false;
        }
    
        const isContainsLowercase = /^(?=.*[a-z])/;
        if (!isContainsLowercase.test(newpass)) {
            $(errorElementID).css('color','lightcoral');
            $(errorElementID).html('Required a Lowercase Character.');
            return false;
        }
    
        const isContainsNumber = /^(?=.*[0-9])/;
        if (!isContainsNumber.test(newpass)) {
            $(errorElementID).css('color','lightcoral');
            $(errorElementID).html('Required a Digit.');
            return false;
        }
        const isValidLength = /^.{6,20}$/;
        if (!isValidLength.test(newpass)) {
            $(errorElementID).css('color','lightcoral');
            $(errorElementID).html('Input must be 10-16 Characters Long.');
            return false;
        }
        $(errorElementID).css('color','black');
        if(errorElementID === '#current-password-error')
        {
            $(errorElementID).html('Current password');
            return true;
        }
        $(errorElementID).html('New password');
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
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(confirmpass !== newpass)
        {
            $(errorElementID).html('Confirm password not match');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html('Confirm password');
        $(errorElementID).css('color','black');
        return true;

    }


    //    Add admin form validation 
        
    $('#add-admin-first-name').on('keyup keypress',function()
    {
        validateName('#add-admin-first-name','#add-admin-first-name-error','Name');
    })
    $('#add-admin-last-name').on('keyup keypress',function()
    {
        validateName('#add-admin-last-name','#add-admin-last-name-error','Lastname');
    })
    $('#add-admin-email').on('keyup keypress',function()
    {
        validateEmail('#add-admin-email','#add-admin-email-error');
    })
    $('#add-admin-type').on('click keypress',function(event)
    {
        validateType('#add-admin-type','#add-admin-type-error');
    })
    $('#add-admin-password').on('keyup keypress',function()
    {
        validatePassword('#add-admin-password','#add-admin-password-error');
    })
    $('#add-admin-confirm-password').on('keyup keydown',function()
    {
        validateConfirmPassword('#add-admin-password','#add-admin-confirm-password','#add-admin-confirm-password-error');
    }) 

    
    // Validate add admin form upon submission
    $('#add-admin-form').on('submit', function(event)
    {
        event.preventDefault();

        function validateSignupForm(){
            let valid = validateName('#add-admin-first-name','#add-admin-first-name-error','First name') && validateName('#add-admin-last-name','#add-admin-last-name-error', 'Last name') && validateEmail('#add-admin-email','#add-admin-email-error') && validateType('#add-admin-type','#add-admin-type-error') && validatePassword('#add-admin-password','#add-admin-password-error') &&  validateConfirmPassword('#add-admin-password','#add-admin-confirm-password','#add-admin-confirm-password-error') ;
            if(!valid)
            {  
                //  event.preventDefault();
                $('#add-admin-submit-form-error').show();
                $('#add-admin-submit-form-error').text('Please fill up the form correctly');
                setTimeout(function()
                {
                    $('#add-admin-submit-form-error').hide();
                },3000);
                return false;
            }
            return true;
        }
        

        let data = $(this).serialize()
        async function submitSignupForm()
        {
          await  $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/admin/add-admin',
                data: data,
                success:function(resp){ 
                    if(resp["status"] === 'success')
                    {
                        $('#success-container').show()
                        $('#success-message').html('New admin account created successfully!')
                        setTimeout(function(){
                            $('#success-container').hide()
                            $('#add-admin-form input').val('')
                        },3000)
                    }
                    
                    else if(resp["status"] === 'error')
                    {  
                        $('#error-container').show()
                        $('#error-message').html('Email is already registered!')
                        setTimeout(function(){
                            $('#error-container').hide()
                        },3000)
                    }
                    else
                    {
                        $('#error-container').show()
                        $('#error-message').html('Email is already registered!')
                        setTimeout(function(){
                            $('#error-container').hide()
                        },3000)
                    }
                    
                },
                error: function(error){
                    // alert(JSON.stringify(error))
                    $('#error-container').show()
                    $('#error-message').html('Email is already registered!')
                    setTimeout(function(){
                        $('#error-container').hide()  
                    },3000)
                    
                    
                }
            })
        }
        let validated = validateSignupForm()
        
        if(validated){
            submitSignupForm().catch(function(error){
                
                $('#error-container').show()
                $('#error-message').html('Add admin failed!')
                setTimeout(function(){
                    $('#error-container').hide()  
                },3000)
            })
        } 
    })



   
    //    Change Admin  Password
    $('#update-password').on('click', function(event)
    {
        if(event.target === this)
        {     
           $('input').val('');
        }
    });
    $('.close-btn').on('click', function()
    {
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
                    $("#current-password-error").html('Wrong password');
                    $("#current-password-error").css('color','lightcoral');
                } else {
                    // $("#current-pass-error").html('');
                    validatePassword('#current-password','#current-password-error');
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
        validatePassword('#new-password','#new-password-error');
    })
    $('#confirm-password').on('keyup keydown',function()
    {
        validateConfirmPassword('#new-password','#confirm-password','#confirm-password-error');
    })
    // validate the form before the form upon submission 
    $('#change-pass-form').on('submit', function(event)
    {
        event.preventDefault();

        function validateChangePassForm()
        {  
            let valid = validatePassword('#current-password','#current-password-error') &&  validatePassword('#new-password','#new-password-error') && validateConfirmPassword('#new-password','#confirm-password','#confirm-password-error');
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