
$(function(){
    
    $('.menu').on('click', function()
    {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.bx-chevron-right').toggleClass('rotate-90');
    });
    // Multi step form
    

   
    //       Form Validation

    //       Validation for name input
    function validateName(nameID,errorElementID,type){
        let name = $(nameID).val();

        if(name.length == 0){
            $(errorElementID).html(type +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!name.match(/^[A-Za-z\s]*$/ )){
            // /^[A-Za-z\s]*$/ - characters with optional space only
            // /^[A-Za-z]*$/ - characters only
            // /^[A-Za-z]*\s{1}[A-Za-z]*$/  name and lastname
            $(errorElementID).html('Characters only!');
            $(errorElementID).css('color','lightcoral'); 
            return false;
        }
        if( name.length > 40){  
            $(errorElementID).html(type + ' is too long!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html(type);
        $(errorElementID).css('color','black');
        return true;
    }
    //       Validation for email input
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
    //       Validation for birthdate input
    function validateBirthdate(birthdateID,errorElementID)
    {
        let birthdate = $(birthdateID).val();
        let birthdatecheck = /(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)/g;

        if(birthdate.length === 0)
        {
            $(errorElementID).css('color','lightcoral');
            $(errorElementID).html('Birthdate is required!');
            setTimeout(function(){
                $(errorElementID).html('Birthdate (dd/mm/yyyy)');
            },4000)
            return false;
        }
        if(!birthdate.match(birthdatecheck))
        {
            $(errorElementID).html('Invalid birthdate!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html('Birthdate');
        $(errorElementID).css('color','black');
        return true; 
    }
    //       Validation for contact input
    function validateContact(contactID,errorElementID)
    {
        let contact = $(contactID).val();
        let need = 11;
        let more = need - contact.length;
        if(contact.length === 0)
        {
            $(errorElementID).html('Contact is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!contact.match(/^09[0-9][0-9]*$/))
        {
            $(errorElementID).html('Invalid contact!');
            $(errorElementID).css('color','lightcoral');
            return false;  
        }
        if(contact.length < 11)
        {
            $(errorElementID).html(more + ' more');
            $(errorElementID).css('color','lightcoral');
            return false;  
        }
        if(contact.length > 11)
        {
            $(errorElementID).html('Invalid contact');
            $(errorElementID).css('color','lightcoral');
            return false;  
        }
        $(errorElementID).html('Contact');
        $(errorElementID).css('color','black');
        return true; 
    }
    //       Validation for address input
    function validateAddress(addressID,errorElementID)
    {
        let address = $(addressID).val();
        if(address.length === 0)
        {
            $(errorElementID).html('Address is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(address.length < 10)
        {
            $(errorElementID).html('Incomplete address');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html('Address');
        $(errorElementID).css('color','black');
        return true; 
    }
    //       Validation password input
    function validatePassword(passwordID,errorElementID)
    {
        let password = $(passwordID).val();
        if(password.length === 0)
        {
        $(errorElementID).html('Password is required!');
        $(errorElementID).css('color','lightcoral');
        return false;
        }
        const isWhitespace = /^(?=.*\s)/;
        if (isWhitespace.test(password)) {
            $(errorElementID).html('Remove space!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
    
        const isContainsUppercase = /^(?=.*[A-Z])/;
        if (!isContainsUppercase.test(password)) {
            $(errorElementID).html('Required uppercase!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
    
        const isContainsLowercase = /^(?=.*[a-z])/;
        if (!isContainsLowercase.test(password)) {
            $(errorElementID).html('Required lowercase!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
    
        const isContainsNumber = /^(?=.*[0-9])/;
        if (!isContainsNumber.test(password)) {
            $(errorElementID).html('Required a digit!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        const isValidLength = /^.{6,20}$/;
        if (!isValidLength.test(password)) {
            $(errorElementID).html('6-20 characters only!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }

        $(errorElementID).html('Password');
        $(errorElementID).css('color','Black');
        return true;

    }
    //       Validation for confirm password input
    function validateConfirmPassword(passwordID,confirmPasswordID,errorElementID)
    {
        let password = $(passwordID).val();
        let confirmpass = $(confirmPasswordID).val();
        if(confirmpass.length == 0)
        {
            $(errorElementID).html('Required field!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(confirmpass !== password)
        {
            $(errorElementID).html('Password not match!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html('Confirn Password!');
        $(errorElementID).css('color','black');
        return true;
    }
    //       Validation for valid id choice
    function validateValidID(validID,errorElementID)
    {
        let validchoice = $(validID).children('option:selected').val();
        if(validchoice === '')
        {
            $(errorElementID).html('Select a valid id!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html('Valid ID');
        $(errorElementID).css('color','black');
        return true;
    }
    //   Validation for valid image file
    function validateLicenseFile(imageID,errorElementID)
    {
        let validID = $(imageID).val();
        if(validID.length === 0)
        {
        
            $(errorElementID).show();
            $(errorElementID).html('This file is required!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(!validID.match(/\.(jpg|jpeg|gif|png)$/))
        {
            $(errorElementID).show();
            $(errorElementID).html('Invalid file');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html('License');
        $(errorElementID).css('color','black');
        return true;
    }
    //       Validation for valid image file
    function validateImageFile(imageID,errorElementID)
    {
        let validID = $(imageID).val();
        if(validID.length === 0)
        {
        
            $(errorElementID).removeClass('hidden');
            $(errorElementID).html('ID file is required!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(!validID.match(/\.(jpg|jpeg|gif|png)$/))
        {
            $(errorElementID).removeClass('hidden');
            $(errorElementID).html('Invalid ID file');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html('ID file');
        $(errorElementID).css('color','black');
        return true;
    }
    //       Validation for terms and conditions
    function validateTerms(termsID,errorElementID)
    {  
        if(!$(termsID).is(':checked'))
        {
            $(errorElementID).show();
            $(errorElementID).html('Check terms and conditions!');
            $(errorElementID).css('color','lightcoral');
            return false;  
        }
        $(errorElementID).hide();
        return true;
    }


            
    //        Signup form validation for input value     
    $('#owner-signup-first-name').on('keyup keypress',function()
    {
        validateName('#owner-signup-first-name','#owner-signup-first-name-error','Name');
    })
    $('#owner-signup-last-name').on('keyup keypress',function()
    {
        validateName('#owner-signup-last-name','#owner-signup-last-name-error','Lastname');
    })
    $('#owner-signup-email').on('keyup keypress',function()
    {
        validateEmail('#owner-signup-email','#owner-signup-email-error');
    })
    $('#owner-signup-birthdate').on('keyup keypress',function()
    {
        validateBirthdate('#owner-signup-birthdate','#owner-signup-birthdate-error');
    })
    $('#owner-signup-contact').on('keyup keypress',function()
    {
        validateContact('#owner-signup-contact','#owner-signup-contact-error');
    })
    $('#owner-signup-address').on('keyup keypress',function()
    {
        validateAddress('#owner-signup-address','#owner-signup-address-error');
    })
    $('#owner-signup-password').on('keyup keypress',function()
    {
        validatePassword('#owner-signup-password','#owner-signup-password-error');
    })
    $('#owner-signup-confirm-password').on('keyup keydown',function()
    {
        validateConfirmPassword('#owner-signup-password','#owner-signup-confirm-password','#owner-signup-confirm-password-error');
    }) 
    $('#owner-signup-valid-id').on('click keypress',function(event)
    {
        validateValidID('#owner-signup-valid-id','#owner-signup-valid-id-error');
    })
    //           Validate signup form upon submission
    $('#owner-signup-form').on('submit', function(event)
    {

        event.preventDefault();

        function validateSignupForm(){
            let valid = validateName('#owner-signup-first-name','#owner-signup-first-name-error','First name') && validateName('#owner-signup-last-name','#owner-signup-last-name-error', 'Last name') && validateEmail('#owner-signup-email','#owner-signup-email-error') && validateBirthdate('#owner-signup-birthdate','#owner-signup-birthdate-error') && validateContact('#owner-signup-contact','#owner-signup-contact-error') &&      validateAddress('#owner-signup-address','#owner-signup-address-error') &&
            validatePassword('#owner-signup-password','#owner-signup-password-error') &&  validateConfirmPassword('#owner-signup-password','#owner-signup-confirm-password','#owner-signup-confirm-password-error')  && validateImageFile('#owner-signup-license','#owner-signup-license-error') && validateValidID('#owner-signup-valid-id','#owner-signup-valid-id-error') && validateImageFile('#owner-signup-id-file','#owner-signup-id-file-error') && validateTerms('#owner-signup-terms','#owner-signup-terms-error');
            if(!valid)
            {  
                //  event.preventDefault();
                $('#owner-signup-submit-form-error').show();
                $('#owner-signup-submit-form-error').text('Please fill up the form correctly');
                setTimeout(function()
                {
                    $('#owner-signup-submit-form-error').hide();
                },3000);
                return false;
            }
            return true;
        }
        

        let formData = new FormData($(this)[0]);
       

        async function submitSignupForm()
        {
            await  $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/admin/signup',
                data:formData,
                processData: false,
                contentType: false,
                success:function(resp){
                    // alert(JSON.stringify(resp['status']))
                    
                    if(resp["status"] === 'success')
                    {
                            window.location.href = '/success';  
                    }
                    else if(resp["status"] === 'error')
                    {  
                        $('.loading').removeClass('grid')
                        $('.loading').hide()
                        $('.error-container').show()
                        $('.error-message').html('Email is already registered!')
                        $('#owner-signup-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()  
                        },3000)
                    }
                    else
                    {
                        $('.loading').removeClass('grid')
                        $('.loading').hide()
                        $('.error-container').show()
                        $('.error-message').html('Email is already registered!')
                        $('#owner-signup-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                    
                },
                error: function(error){
                    // alert(JSON.stringify(error))
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('System account registration failed!')
                    $('#owner-signup-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                    
                }
            })
        }
        let validated = validateSignupForm()
       
        if(validated){
            $('#owner-signup-form button[type="submit"]').addClass('hidden')
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
            submitSignupForm().catch(function(error){
                $('#owner-signup-form button[type="submit"]').removeClass('hidden')
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show()
                $('.error-message').html('System account registration failed!')
                setTimeout(function(){
                    window.location.href = '/admin/signup';  
                },3000)
            })
        } 
    })




    //        Login form validation for input value
    $('#admin-login-email').on('keyup keypress',function()
    {
        validateEmail('#admin-login-email','#admin-login-email-error');
    })
    $('#admin-login-password').on('keyup keypress',function()
    {
        validatePassword('#admin-login-password','#admin-login-password-error');
    })
    //        Validate login form upon submission
    $('#admin-login-form').on('submit', async function(event){
        event.preventDefault();
       
        
        let valid = validateEmail('#admin-login-email','#admin-login-email-error') &&
        validatePassword('#admin-login-password','#admin-login-password-error');

        if(!valid)
        { 
            
            $('#admin-login-submit-form-error').show();
            $('#admin-login-submit-form-error').text('Please fill up the form correctly!');
            setTimeout(function()
            {
                $('#admin-login-submit-form-error').hide();
            },3000);
            return false;
        }
        $('#admin-login-form button[type="submit"]').addClass('hidden')
        $('.loading').removeClass('hidden')
        $('.loading').addClass('grid')
        let email = $('#admin-login-email').val();
        let password = $('#admin-login-password').val();
        await  $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'post',
                url: '/admin/login',
                data: {
                    email: email,
                    password: password 
                },
                success: function(resp){
                                
                    //  alert(JSON.stringify(resp))
                if(resp['status'] === 'verified')
                {
                    window.location.href = '/admin/dashboard';  
                }
                else if(resp['status'] === 'unverified')
                {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('Your account is not yet verified by admin!')
                    $('#admin-login-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){ 
                        $('.error-container').hide()  
                    },3000) 
                }
                else if(resp['status'] === 'declined')
                {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('Your account has been declined!')
                    $('#admin-login-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){ 
                        $('.error-container').hide() 
                    },3000) 
                }
                else if(resp['status'] === 'unconfirmed')
                {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('Please check your email and confirm your account!')
                    $('#admin-login-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){ 
                        $('.error-container').hide()    
                    },3000) 
                }
                else
                {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('Invalid Email or password!')
                    $('#admin-login-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){ 
                        $('.error-container').hide()    
                    },3000)  
                }
                },
                error: function(data){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('System login failed!')
                    setTimeout(function(){ 
                        $('.error-container').hide() 
                        window.location.href = '/admin/login';  
                    },1500) 
                }
        })
        
       
    
    });





    //            Forgot password form validation
    $('#forgot-password-email').on('keyup keypress',function()
    {
        validateEmail('#forgot-password-email','#forgot-password-email-error');
    })
    //            Validate forgot password form upon submission
    $('#forgot-password-form').on('submit', async function(event)
    {
        event.preventDefault();
        let valid = validateEmail('#forgot-password-email','#forgot-password-email-error');
        let email = $('#forgot-password-email').val();
        if(valid)
        {  
            $('#forgot-password-form button[type="submit"]').addClass('hidden')
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
           await $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/admin/forgot-password',
                data: {email:email},
                success: function(resp)
                {
                    // alert(JSON.stringify(resp['status']));
                    if(resp['status'] === 'found')
                    {
                        $('.loading').removeClass('grid')
                        $('.loading').hide()
                        $('.success-container').show()
                        $('.success-message').html('A temporary password was sent to your email!')
                        $('#forgot-password-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.success-container').hide()
                        },3000)
                    }
                    else if (resp['status'] === 'notfound')
                    {
                        $('.loading').removeClass('grid')
                        $('.loading').hide()
                        $('.error-container').show()
                        $('.error-message').html('Email is not yet registered!')
                        $('#forgot-password-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    } 
                    else 
                    {
                        $('.loading').removeClass('grid')
                        $('.loading').hide()
                        $('.error-container').show()
                        $('.error-message').html('Invalid email!')
                        $('#forgot-password-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                },
                error: function()
                {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('Invalid email!')
                    $('#forgot-password-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                }
            });
        }
    });



    

    //          Change password form validation
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
    })
    $('#new-password').on('keyup keypress',function()
    {
        validatePassword('#new-password','#new-password-error');
    })
    $('#confirm-password').on('keyup keydown',function()
    {
        validateConfirmPassword('#new-password','#confirm-password','#confirm-password-error');
    })
    //         Validate change password form upon submission 
    $('#change-pass-form').on('submit', function(event)
    {
        event.preventDefault();

        function validateChangePassForm()
        {  
            let valid = validatePassword('#current-password','#current-password-error') &&  validatePassword('#new-password','#new-password-error') && validateConfirmPassword('#new-password','#confirm-password','#confirm-password-error');
                if(!valid)
                { 
                    $('.error-container').show();
                    $('.error-message').text('Please fill up the form correctly');
                    setTimeout(function()
                    {
                        $('.error-container').hide();
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
                        $('.error-container').show();
                        $(".error-message").html('Current password is invalid!');
                        $('#change-pass-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide();
                        },3000)
                    } else {
                        $('.success-container').show();
                        $(".success-message").text('Password updated successfully!');
                        $('#change-pass-form input').val('');
                        $('#change-pass-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.success-container').hide();
                        },3000)
                    }
                },
                error: function () {
                    $('.error-container').show();
                    $(".error-message").html('Update password failed!');
                    $('#change-pass-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').show();
                    },3000)
                },
            });
        }
        const validated = validateChangePassForm()
        if(validated){
            $('#change-pass-form button[type="submit"]').addClass('hidden')
            submitPassword().catch(function(error){
                $('#change-pass-form button[type="submit"]').removeClass('hidden')
                $('.error-container').show();
                $(".error-message").text('Update password failed!');
                setTimeout(function(){
                    $('.error-container').show();
                },3000)
            });
        }      
    })




    //        Edit profile form validation for input value
    
    $('#edit-first-name').on('keyup keypress',function()
    {
        validateName('#edit-first-name','#edit-first-name-error','Firstname');
    })
    $('#edit-last-name').on('keyup keypress',function()
    {
        validateName('#edit-last-name','#edit-last-name-error','Lastname');
    })
    $('#edit-birthdate').on('keyup keypress',function()
    {
        validateBirthdate('#edit-birthdate','#edit-birthdate-error');
    })
    $('#edit-contact').on('keyup keypress',function()
    {
        validateContact('#edit-contact','#edit-contact-error');
    })
    $('#edit-address').on('keyup keypress',function()
    {
        validateAddress('#edit-address','#edit-address-error');
    })
    $('#edit-valid-id').on('click keypress',function(event)
    {
        validateValidID('#edit-valid-id','#edit-valid-id-error');
    })
    //        Validate signup form upon submission
    $('#edit-profile-form').on('submit', function(event)
    {
        event.preventDefault();
        

        function validateSignupForm(){
                
            
            let valid_id_file = $('#edit-id-file').val() 
                
            
                if(valid_id_file.length !== 0)
            {
                
                let valid = validateName('#edit-first-name','#edit-first-name-error','First name') && validateName('#edit-last-name','#edit-last-name-error', 'Last name') && validateBirthdate('#edit-birthdate','#edit-birthdate-error') && validateContact('#edit-contact','#edit-contact-error') && validateAddress('#edit-address','#edit-address-error')  && validateValidID('#edit-valid-id','#edit-valid-id-error') && validateImageFile('#edit-id-file','#edit-id-file-error') ;
                if(!valid)
                {  
                    $('#edit-submit-form-error').show();
                    $('#edit-submit-form-error').text('Please fill up the form correctly');
                    setTimeout(function()
                    {
                        $('#edit-submit-form-error').hide();
                    },3000);
                    return false;
                }
                return true;
            }
            
            else
            {
                let valid = validateName('#edit-first-name','#edit-first-name-error','First name') && validateName('#edit-last-name','#edit-last-name-error', 'Last name') && validateBirthdate('#edit-birthdate','#edit-birthdate-error') && validateContact('#edit-contact','#edit-contact-error') &&  validateAddress('#edit-address','#edit-address-error')  && validateValidID('#edit-valid-id','#edit-valid-id-error');
                if(!valid)
                {  
                    $('#edit-submit-form-error').show();
                    $('#edit-submit-form-error').text('Please fill up the form correctly');
                    setTimeout(function()
                    {
                        $('#edit-submit-form-error').hide();
                    },3000);
                    return false;
                }
                return true;

            }
                
        }
            
        let formData = new FormData($(this)[0]);

        async function submitSignupForm()
        {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/admin/update-profile',
                data:formData,
                processData: false,
                contentType: false,
                success:function(resp){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    //    alert(JSON.stringify(resp['data']))
                    if(resp["data"] === 'success')
                    {
                        $('.success-container').show()
                        $('.success-message').html('Details updated successfully!')
                        setTimeout(function(){
                            window.location.href = '/admin/profile';   
                        },1500)  
                    }
                    else 
                    {  
                        $('.error-container').show()
                        $('.error-message').html('Update details failed!')
                        $('#edit-profile-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()  
                        },3000)
                    }
                    
                },
                error: function(){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('System error update details failed!')
                    $('#edit-profile-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                }
            })
        }
        let validated = validateSignupForm()
        
        
        if(validated){
            $('#edit-profile-form button[type="submit"]').addClass('hidden')
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
            submitSignupForm().catch(function(error){
                $('#edit-profile-form button[type="submit"]').removeClass('hidden')
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show()
                $('.error-message').html('System update details failed!')
                setTimeout(function(){
                    window.location.href = '/admin/profile';  
                },3000)
            })
        }
        
    })



     // Car validations
     function validateCarName(nameID,errorElementID,type){
        let name = $(nameID).val();

        if(name.length == 0){
            $(errorElementID).html(type +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
       
        if( name.length > 100){  
            $(errorElementID).html(type + ' is too long!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html(type);
        $(errorElementID).css('color','black');
        return true;
    }
    function validatePlateNumber(plateID,errorElementID,type){
        let name = $(plateID).val();

        if(name.length == 0)
        {
            $(errorElementID).html(type +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!name.match(/^[A-Z0-9\s]*$/ ))
        {
            $(errorElementID).html('Uppercase and numbers only!');
            $(errorElementID).css('color','lightcoral'); 
            return false;
        }
       
        if( name.length > 8){  
            $(errorElementID).html(type + ' is too long!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html(type);
        $(errorElementID).css('color','black');
        return true;
    }
    function validateCarType(typeID,errorElementID)
    {
        let validchoice = $(typeID).children('option:selected').val();
        if(validchoice === '')
        {
            $(errorElementID).html('Select a car type!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html('Car type');
        $(errorElementID).css('color','black');
        return true;
    }
    function validateCarDescription(descriptionID,errorElementID)
    {
        let description = $(descriptionID).val();

        if(description.length == 0)
        {
            $(errorElementID).html('Car description is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        
        if(description.length < 20)
        {
            $(errorElementID).html('Too short!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html('Car description');
        $(errorElementID).css('color','black');
        return true;
    }
    function validateCarCapacity(capacityID,errorElementID)
    {
        let capacity = $(capacityID).val();

        if(capacity.length == 0)
        {
            $(errorElementID).html('Car capacity is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!capacity.match(/^[0-9]*$/ ))
        {
            $(errorElementID).html('Numbers only!');
            $(errorElementID).css('color','lightcoral'); 
            return false;
        }
        if(capacity <= 0)
        {
            $(errorElementID).html('Invalid car capacity!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(capacity > 30)
        {
            $(errorElementID).html('Invalid car capacity!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(capacity.length > 2)
        {
            $(errorElementID).html('Invalid car capacity!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html('Car capacity');
        $(errorElementID).css('color','black');
        return true;
    }
    function validateCarImageFile(imageID,errorElementID,imageType)
    {
        
        let files =  $(imageID)[0].files;
       
        if(files.length === 0)
        {
            $(errorElementID).html(imageType + ' is required!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
      
      
        for(var i=0; i < files.length; i++){
            let file = files[i]
           
            if(!file.name.match(/\.(jpg|jpeg|gif|png)$/))
            {
                $(errorElementID).html('Invalid selected file');
                $(errorElementID).css('color','lightcoral');
                return false; 
            }

        } 
        if(files.length > 9)
        {
            $(errorElementID).html(imageType + ' maximum is 9!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }

     
        $(errorElementID).html(imageType);
        $(errorElementID).css('color','black');
        return true;
    }
    function validatePickupLocation(pickupID,errorElementID,type){
        let name = $(pickupID).val();

        if(name.length == 0){
            $(errorElementID).html(type +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
       
        if( name.length < 10){  
            $(errorElementID).html(type + ' is too short!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        $(errorElementID).html(type);
        $(errorElementID).css('color','black');
        return true;
    }
    function validateCarDriversFee(driverID,errorElementID)
    {
        let driversFee = $(driverID).val();

        if(driversFee.length == 0)
        {
            $(errorElementID).html('Driver\'s fee is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!driversFee.match(/^[0-9]*$/ ))
        {
            $(errorElementID).html('Numbers only!');
            $(errorElementID).css('color','lightcoral'); 
            return false;
        }
        if(driversFee <= 0)
        {
            $(errorElementID).html('Invalid driver\'s fee!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(driversFee > 100000)
        {
            $(errorElementID).html('Invalid driver\'s fee!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        
        $(errorElementID).html('Driver\'s fee');
        $(errorElementID).css('color','black');
        return true;
    }
    function validateCarPrice(priceID,errorElementID,locations)
    {
        let price = $(priceID).val();

        if(price.length == 0)
        {
            $(errorElementID).html('Price is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!price.match(/^[0-9]*$/ ))
        {
            $(errorElementID).html('Numbers only!');
            $(errorElementID).css('color','lightcoral'); 
            return false;
        }
        if(price <= 1000)
        {
            $(errorElementID).html('Invalid Price!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(price > 100000)
        {
            $(errorElementID).html('Invalid Price!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        
        $(errorElementID).html(locations);
        $(errorElementID).css('color','black');
        return true;
    }


    
    //    Car form validation
    $('#add-admin-car-name').on('keyup keypress',function()
    {
        validateCarName('#add-admin-car-name','#add-admin-car-name-error','Name of car ');
    })
    $('#add-admin-car-plate-number').on('keyup keypress',function()
    {
        validatePlateNumber('#add-admin-car-plate-number','#add-admin-car-plate-number-error','Plate number');
    })
    $('#add-admin-set-car-type').on('click keypress',function()
    {
        validateCarType('#add-admin-set-car-type','#add-admin-set-car-type-error');
    })
    $('#add-admin-car-capacity').on('keyup keypress',function()
    {
        validateCarCapacity('#add-admin-car-capacity','#add-admin-car-capacity-error');
    })
    $('#add-admin-car-registration').on('change', function(){
        validateCarImageFile('#add-admin-car-registration','#add-admin-car-registration-error','Car registration')
    })
    $('#add-admin-car-photos').on('change', function(){
        validateCarImageFile('#add-admin-car-photos','#add-admin-car-photos-error','Photos of cars')
    })
   
    $('#add-admin-car-main-photo').on('change', function(){
        validateCarImageFile('#add-admin-car-main-photo','#add-admin-car-main-photo-error','Main car photo')
    })
    $('#add-admin-car-description').on('keyup keypress',function()
    {
        validateCarDescription('#add-admin-car-description','#add-admin-car-description-error');
    })
    $('#add-admin-car-pickup-location').on('keyup keypress',function()
    {
        validatePickupLocation('#add-admin-car-pickup-location','#add-admin-car-pickup-location-error','Pick-up location');
    })
    $('#add-admin-car-with-driver').on('click', function(){
        $('#add-admin-car-drivers-fee').removeAttr('readonly')
    })
    $('#add-admin-car-only').on('click', function(){
        $('#add-admin-car-drivers-fee').attr('readonly','readonly')
        $('#add-admin-car-drivers-fee').val('0')
        $('#add-admin-car-drivers-fee-error').html('Driver\'s fee');
        $('#add-admin-car-drivers-fee-error').css('color','black');
    })
    $('#add-admin-car-drivers-fee').on('keyup keypress',function()
    {
        validateCarDriversFee('#add-admin-car-drivers-fee','#add-admin-car-drivers-fee-error');
    })
    $('#add-admin-car-price-ilocos-region').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-ilocos-region','#add-admin-car-price-ilocos-region-error','REGION I (ILOCOS REGION)');
    })
    $('#add-admin-car-price-cagayan-valley').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-cagayan-valley','#add-admin-car-price-cagayan-valley-error','REGION II (CAGAYAN VALLEY)');
    })
    $('#add-admin-car-price-central-luzon').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-central-luzon','#add-admin-car-price-central-luzon-error','REGION III (CENTRAL LUZON)');
    })
    $('#add-admin-car-price-calabarzon').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-calabarzon','#add-admin-car-price-calabarzon-error','REGION IV-A (CALABARZON)');
    })
    $('#add-admin-car-price-mimaropa').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-mimaropa','#add-admin-car-price-mimaropa-error','REGION IV-B (MIMAROPA)');
    })
    $('#add-admin-car-price-bicol-region').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-bicol-region','#add-admin-car-price-bicol-region-error','REGION V (BICOL REGION)');
    })
    $('#add-admin-car-price-ncr').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-ncr','#add-admin-car-price-ncr-error','NATIONAL CAPITAL REGION (NCR)');
    })
    $('#add-admin-car-price-car').on('keyup keypress',function()
    {
        validateCarPrice('#add-admin-car-price-car','#add-admin-car-price-car-error','CORDILLERA ADMINISTRATIVE REGION (CAR)');
    })

      //    Add car form validation
    $('.step-2').on('click', function(){

        
        let valid = validateCarName('#add-admin-car-name','#add-admin-car-name-error','Name of car ') && validatePlateNumber('#add-admin-car-plate-number','#add-admin-car-plate-number-error','Plate number') && validateCarType('#add-admin-set-car-type','#add-admin-set-car-type-error') && validateCarCapacity('#add-admin-car-capacity','#add-admin-car-capacity-error') && validateCarImageFile('#add-admin-car-registration','#add-admin-car-registration-error','Car registration') && validateCarImageFile('#add-admin-car-main-photo','#add-admin-car-main-photo-error','Main car photo') && validateCarImageFile('#add-admin-car-photos','#add-admin-car-photos-error','Photos of cars') ;
       

      
        if(valid)
        {
            $('.form-step').hide()
            $('.step-two').show() 
        }
        
            
    })
    $('.step-1').on('click', function(){
        $('.form-step').hide()
        $('.step-one').show()
    })
    $('.step-3').on('click', function(){
        let valid =  validatePickupLocation('#add-admin-car-pickup-location','#add-admin-car-pickup-location-error','Pick-up location') && validateCarDescription('#add-admin-car-description','#add-admin-car-description-error');
        let driversFee = true;
        if($('#add-admin-car-with-driver').is(':checked'))
        {
          driversFee =  validateCarDriversFee('#add-admin-car-drivers-fee','#add-admin-car-drivers-fee-error') ;
        }
        if(valid && driversFee)
        {
            $('.form-step').hide()
            $('.step-three').show()
        }  
       
        
    })
    
    $('#add-car-form').on('submit',function(event){
        event.preventDefault()
       

        function validateAddCarForm()
        {

            let valid = validateCarPrice('#add-admin-car-price-cagayan-valley','#add-admin-car-price-cagayan-valley-error','REGION II (CAGAYAN VALLEY)') && validateCarPrice('#add-admin-car-price-central-luzon','#add-admin-car-price-central-luzon-error','REGION III (CENTRAL LUZON)') &&  validateCarPrice('#add-admin-car-price-calabarzon','#add-admin-car-price-calabarzon-error','REGION IV-A (CALABARZON)') && validateCarPrice('#add-admin-car-price-mimaropa','#add-admin-car-price-mimaropa-error','REGION IV-B (MIMAROPA)') && validateCarPrice('#add-admin-car-price-bicol-region','#add-admin-car-price-bicol-region-error','REGION V (BICOL REGION)') && validateCarPrice('#add-admin-car-price-ncr','#add-admin-car-price-ncr-error','NATIONAL CAPITAL REGION (NCR)') && validateCarPrice('#add-admin-car-price-car','#add-admin-car-price-car-error','CORDILLERA ADMINISTRATIVE REGION (CAR)');

            if(!valid)
            {  
                return false;
            }
            return true;
        }

        let formData = new FormData($(this)[0]);

        async function submitAddCarForm()
        {
         await   $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/admin/add-car',
                data:formData,
                processData: false,
                contentType: false,
                success:function(resp){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    //    alert(JSON.stringify(resp['data']))
                    if(resp["data"] === 'success')
                    {
                        $('.success-container').show()
                        $('.success-message').html('Car added successfully!')
                        setTimeout(function(){
                            window.location.href = '/admin/cars';   
                        },1500)  
                    }
                    else 
                    {  
                        $('.error-container').show()
                        $('.error-message').html('Add car failed!')
                        $('#add-car-form button[type="submit"]').addClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()  
                        },3000)
                    }
                    
                },
                error: function(){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('System error add car failed!')
                    $('#add-car-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                }
            })
        }
        let validated = validateAddCarForm()
        
        
        if(validated){
            $('#add-car-form button[type="submit"]').addClass('hidden')
            
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
           
            submitAddCarForm().catch(function(error){
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show()
                $('.error-message').html('System add car failed!')
                setTimeout(function(){
                    window.location.href = '/admin/cars';  
                },3000)
            })
        }

    })
   
});
