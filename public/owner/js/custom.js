
$(function(){
    
    $('.menu').on('click', function()
    {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.chevron-right').toggleClass('rotate-90');
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
            },1000)
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
    function validateImageFile(imageID,errorElementID,fileType)
    {
        let validID = $(imageID).val();
        if(validID.length === 0)
        {
        
            $(errorElementID).removeClass('hidden');
            $(errorElementID).html('File is required!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(!validID.match(/\.(jpg|jpeg|gif|png)$/))
        {
            $(errorElementID).removeClass('hidden');
            $(errorElementID).html('Invalid file');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html(fileType);
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
    $('#owner-signup-license').on('change',function(){
        validateImageFile('#owner-signup-license','#owner-signup-license-error','Driver\'s License')
    })
    $('#owner-signup-id-file').on('change',function(){
        validateImageFile('#owner-signup-id-file','#owner-signup-id-file-error','')
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
            validatePassword('#owner-signup-password','#owner-signup-password-error') &&  validateConfirmPassword('#owner-signup-password','#owner-signup-confirm-password','#owner-signup-confirm-password-error')  && validateImageFile('#owner-signup-license','#owner-signup-license-error','Driver\'s License') && validateValidID('#owner-signup-valid-id','#owner-signup-valid-id-error') && validateImageFile('#owner-signup-id-file','#owner-signup-id-file-error','') && validateTerms('#owner-signup-terms','#owner-signup-terms-error');
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
                $('.error-message').html('File size is too large! Recommended 250 KB or lower')
                setTimeout(function(){
                    $('.error-container').hide()
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
                            location.reload() 
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
                    $('.error-container').hide() 
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
       
        if( name.length > 8 || name.length < 5){  
            $(errorElementID).html('Invalid ' + type + '!');
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
        if(imageType === 'Photos of cars' && files.length < 2)
        {
            $(errorElementID).html( 'Need more photos!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(files.length > 4)
        {
            $(errorElementID).html(imageType + ' maximum is 4!');
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
        validateCarName('#add-admin-car-name','#add-admin-car-name-error','Brand and Model');
    })
    $('#add-admin-car-plate-number').on('keyup keypress',function()
    {
        validatePlateNumber('#add-admin-car-plate-number','#add-admin-car-plate-number-error','Plate number');
    })
    $('#add-admin-set-car-type').on('click keypress',function()
    {
        validateCarType('#add-admin-set-car-type','#add-admin-set-car-type-error');
    })
    $('#add-admin-car-fuel-type').on('keyup keypress',function()
    {
        validateName('#add-admin-car-fuel-type','#add-admin-car-fuel-type-error','Fuel Type');
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
    $('#add-admin-terms').on('change',function(){
        validateTerms('#add-admin-terms','#add-admin-terms-error') 
    })

      //    Add car form validation
    $('.step-2').on('click', function(){

        
        let valid = validateCarName('#add-admin-car-name','#add-admin-car-name-error','Brand and Model') && validatePlateNumber('#add-admin-car-plate-number','#add-admin-car-plate-number-error','Plate number') && validateCarType('#add-admin-set-car-type','#add-admin-set-car-type-error') && validateName('#add-admin-car-fuel-type','#add-admin-car-fuel-type-error','Fuel Type') && validateCarCapacity('#add-admin-car-capacity','#add-admin-car-capacity-error') && validateCarImageFile('#add-admin-car-registration','#add-admin-car-registration-error','Car registration') && validateCarImageFile('#add-admin-car-main-photo','#add-admin-car-main-photo-error','Main car photo') && validateCarImageFile('#add-admin-car-photos','#add-admin-car-photos-error','Photos of cars') ;
       

      
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
    
    $('#add-car-form').on('submit', async function(event){
        event.preventDefault()
       

      async  function validateAddCarForm()
        {

            let valid = validateCarName('#add-admin-car-name','#add-admin-car-name-error','Brand and Model') && validatePlateNumber('#add-admin-car-plate-number','#add-admin-car-plate-number-error','Plate number') && validateCarType('#add-admin-set-car-type','#add-admin-set-car-type-error') && validateName('#add-admin-car-fuel-type','#add-admin-car-fuel-type-error','Fuel Type') && validateCarCapacity('#add-admin-car-capacity','#add-admin-car-capacity-error') && validateCarImageFile('#add-admin-car-registration','#add-admin-car-registration-error','Car registration') && validateCarImageFile('#add-admin-car-main-photo','#add-admin-car-main-photo-error','Main car photo') && validateCarImageFile('#add-admin-car-photos','#add-admin-car-photos-error','Photos of cars') && validatePickupLocation('#add-admin-car-pickup-location','#add-admin-car-pickup-location-error','Pick-up location') && validateCarDescription('#add-admin-car-description','#add-admin-car-description-error') && validateCarPrice('#add-admin-car-price-cagayan-valley','#add-admin-car-price-cagayan-valley-error','REGION II (CAGAYAN VALLEY)') && validateCarPrice('#add-admin-car-price-central-luzon','#add-admin-car-price-central-luzon-error','REGION III (CENTRAL LUZON)') &&  validateCarPrice('#add-admin-car-price-calabarzon','#add-admin-car-price-calabarzon-error','REGION IV-A (CALABARZON)') && validateCarPrice('#add-admin-car-price-mimaropa','#add-admin-car-price-mimaropa-error','REGION IV-B (MIMAROPA)') && validateCarPrice('#add-admin-car-price-bicol-region','#add-admin-car-price-bicol-region-error','REGION V (BICOL REGION)') && validateCarPrice('#add-admin-car-price-ncr','#add-admin-car-price-ncr-error','NATIONAL CAPITAL REGION (NCR)') && validateCarPrice('#add-admin-car-price-car','#add-admin-car-price-car-error','CORDILLERA ADMINISTRATIVE REGION (CAR)') && validateTerms('#add-admin-terms','#add-admin-terms-error') ;
            let driversFee = true;
            if($('#add-admin-car-with-driver').is(':checked'))
            {
            driversFee =  validateCarDriversFee('#add-admin-car-drivers-fee','#add-admin-car-drivers-fee-error') ;
            }

            if(!valid && !driverFee)
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
                            location.reload() 
                        },1500)  
                    }
                    else 
                    {  
                        $('.error-container').show()
                        $('.error-message').html('Add car failed!')
                        $('#add-car-form button[type="submit"]').removeClass('hidden')
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
        let validated = await validateAddCarForm()
        
        
        if(validated){
            $('#add-car-form button[type="submit"]').addClass('hidden')
            
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
           
          await  submitAddCarForm().catch(function(error){
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show()
                $('.error-message').html('File size is too large! Recommended 250 KB or lower')
                $('#add-car-form button[type="submit"]').removeClass('hidden')
                setTimeout(function(){
                    location.reload()  
                },3000)
            })
        }

    })

     //       View car details
     $('.second-details').on('click', function(){
        $('.view-step').hide()
        $('.detail-two').show() 
    })
    $('.first-details').on('click', function(){
        $('.view-step').hide()
        $('.detail-one').show() 
    })
    $('.third-details').on('click', function(){
        $('.view-step').hide()
        $('.detail-three').show() 
    })
    $(document).on('click','.view-registration-image',function(){
        $('.registration-image').slideToggle()
    })
    //       Edit car status
    $('#arkilla-table').on("click",".updateCarStatus", async function () 
    {
        var status = $(this).children("svg").attr("status");
        var car_id = $(this).attr("car_id");
        var newStatus;
        if (status === "Inactive") newStatus = "Active";
        else newStatus = "Inactive";
        if(!confirm("Update status to "+ newStatus + "?")) return false
    
    await $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                "content"
            ),
        },
        type: "post",
        url: "/admin/update-car-status",
        data: { status: status, car_id: car_id },
        success: function (resp) {
            // alert(JSON.stringify(resp['status']))
            if (resp["status"] === 0) {
                $("#car-" + car_id).html(
                    '<svg status="Inactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#e84949" fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94L8.28 7.22Z" clip-rule="evenodd"/></svg>'
                );
                $(".car"+car_id).html('Status: <span class="font-semibold">Inactive</span>');
            } else if (resp["status"] === 1) {
                $("#car-" + car_id).html(
                    '<svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>'
                );
                $(".car"+car_id).html('Status: <span class="font-semibold">Active</span>');
            }
        },
        error: function (resp) {
            alert("error");
        },
    });
        
    });
    //       Delete car 
    $("#arkilla-table").on("click",".confirmDeleteCar", async function () 
    {
       
        var id = $(this).attr("moduleid");
        var car = $(this).attr("car");

        if(!confirm("Want to delete this car?")) return false

      await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            type: "post",
            url: "/admin/delete-car",
            data: { id:id },
            success: function (resp) {
                if(resp['status'] === 'deleted') 
                {
                    window.location.href = '/admin/cars' 
                }
                else alert('Failed to delete '+car +'!')
            },
            error: function (resp) {
                alert("Delete failed! System error.")
            },
        });
    });

      //       Edit car details
      var driverFee;
      $(document).on("click",'.edit', function(){
          var car = $(this).data('info')
          // alert(JSON.stringify(car))
          driverFee = car['drivers_fee']
          $('#edit-admin-car-id').val(car['id'])
          $('#edit-admin-car-name').val(car['name'])
          $('#edit-admin-car-plate-number').val(car['plate_number'])
          $('#edit-admin-set-car-type option').each(function()
          {
              if($(this).val() === car['type_id'].toString())
              {
                  $(this).attr('selected',true)
              }
          })
          $('#edit-admin-car-fuel-type').val(car['fuel_type'])
          $('#edit-admin-car-capacity').val(car['capacity'])
          $('#edit-admin-car-description').val(car['description'])
          $('#edit-admin-car-pickup-location').val(car['pickup_location'])
       
          if(car['driver'] === '1')
          {
              $('#edit-admin-car-with-driver').prop('checked',true)
              $('#edit-admin-car-drivers-fee').prop('readonly',false)
          }
          if(car['driver'] === '0')
          {
              $('#edit-admin-car-only').prop('checked',true)
              $('#edit-admin-car-drivers-fee').prop('readonly',true)
          }
   
         
          $('#edit-admin-car-drivers-fee').val(car['drivers_fee'])
          $('#edit-admin-car-price-ilocos-region').val(car['car_price'][0]['price'])
          $('#edit-admin-car-price-cagayan-valley').val(car['car_price'][1]['price'])
          $('#edit-admin-car-price-central-luzon').val(car['car_price'][2]['price'])
          $('#edit-admin-car-price-calabarzon').val(car['car_price'][3]['price'])
          $('#edit-admin-car-price-mimaropa').val(car['car_price'][4]['price'])
          $('#edit-admin-car-price-bicol-region').val(car['car_price'][5]['price'])
          $('#edit-admin-car-price-ncr').val(car['car_price'][6]['price'])
          $('#edit-admin-car-price-car').val(car['car_price'][7]['price'])
          
      })
      $('#edit-admin-car-with-driver').on('click', function(){
         
          $('#edit-admin-car-drivers-fee').removeAttr('readonly')
          $('#edit-admin-car-drivers-fee').val(driverFee)
      })
      $('#edit-admin-car-only').on('click', function(){
          $('#edit-admin-car-drivers-fee').attr('readonly','readonly')
          $('#edit-admin-car-drivers-fee').val('0')
          $('#edit-admin-car-drivers-fee-error').html('Driver\'s fee');
          $('#edit-admin-car-drivers-fee-error').css('color','black');
      })
      $('#edit-admin-car-name').on('keyup keypress',function()
      {
          validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Name of car ');
      })
      $('#edit-admin-car-plate-number').on('keyup keypress',function()
      {
          validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number');
      })
      $('#edit-admin-set-car-type').on('click keypress',function()
      {
          validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error');
      })
      $('#edit-admin-car-fuel-type').on('keyup',function()
    {
        validateName('#edit-admin-car-fuel-type','#edit-admin-car-fuel-type-error','Fuel Type');
    })
      $('#edit-admin-car-capacity').on('keyup keypress',function()
      {
          validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error');
      })
      // $('#edit-admin-car-registration').on('change', function(){
      //     validateImageFile('#edit-admin-car-registration','#edit-admin-car-registration-error','Car registration')
      // })
      $('#edit-admin-car-photos').on('change', function(){
          validateImageFile('#edit-admin-car-photos','#edit-admin-car-photos-error','Photos of cars')
      })
      $('#edit-admin-car-main-photo').on('change', function(){
          validateImageFile('#edit-admin-car-main-photo','#edit-admin-car-main-photo-error','Main car photo')
      })
      $('#edit-admin-car-description').on('keyup keypress',function()
      {
          validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
      })
      $('#edit-admin-car-pickup-location').on('keyup keypress',function()
      {
          validatePickupLocation('#edit-admin-car-pickup-location','#edit-admin-car-pickup-location-error','Pick-up location');
      }) 
      $('#edit-admin-car-drivers-fee').on('keyup keypress',function()
      {
          validateCarDriversFee('#edit-admin-car-drivers-fee','#edit-admin-car-drivers-fee-error');
      })
      $('#edit-admin-car-price-ilocos-region').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-ilocos-region','#edit-admin-car-price-ilocos-region-error','REGION I (ILOCOS REGION)');
      })
      $('#edit-admin-car-price-cagayan-valley').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-cagayan-valley','#edit-admin-car-price-cagayan-valley-error','REGION II (CAGAYAN VALLEY)');
      })
      $('#edit-admin-car-price-central-luzon').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-central-luzon','#edit-admin-car-price-central-luzon-error','REGION III (CENTRAL LUZON)');
      })
      $('#edit-admin-car-price-calabarzon').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-calabarzon','#edit-admin-car-price-calabarzon-error','REGION IV-A (CALABARZON)');
      })
      $('#edit-admin-car-price-mimaropa').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-mimaropa','#edit-admin-car-price-mimaropa-error','REGION IV-B (MIMAROPA)');
      })
      $('#edit-admin-car-price-bicol-region').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-bicol-region','#edit-admin-car-price-bicol-region-error','REGION V (BICOL REGION)');
      })
      $('#edit-admin-car-price-ncr').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-ncr','#edit-admin-car-price-ncr-error','NATIONAL CAPITAL REGION (NCR)');
      })
      $('#edit-admin-car-price-car').on('keyup keypress',function()
      {
          validateCarPrice('#edit-admin-car-price-car','#edit-admin-car-price-car-error','CORDILLERA ADMINISTRATIVE REGION (CAR)');
      })
         //    Editcar form validation
      $('.edit-step-2').on('click', function(){
          let mainPhoto = $('#edit-admin-car-main-photo')[0].files;
          let carPhotos = $('#edit-admin-car-photos')[0].files;
          var valid;
          if(carPhotos.length !== 0 && mainPhoto.length !== 0)
          {
               valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Brand and Model') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateName('#edit-admin-car-fuel-type','#edit-admin-car-fuel-type-error','Fuel Type') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateImageFile('#edit-admin-car-main-photo','#edit-admin-car-main-photo-error','Main car photo') && validateImageFile('#edit-admin-car-photos','#edit-admin-car-photos-error','Photos of cars') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
          }
          if(carPhotos.length === 0 && mainPhoto.length === 0)
          {
              valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Brand and Model') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateName('#edit-admin-car-fuel-type','#edit-admin-car-fuel-type-error','Fuel Type') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
          }
          if(carPhotos.length !== 0 && mainPhoto.length === 0)
          {
               valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Brand and Model') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateName('#edit-admin-car-fuel-type','#edit-admin-car-fuel-type-error','Fuel Type') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateImageFile('#edit-admin-car-photos','#edit-admin-car-photos-error','Photos of cars') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
          }
          if(carPhotos.length === 0 && mainPhoto.length !== 0)
          {
              valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Brand and Model') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateName('#edit-admin-car-fuel-type','#edit-admin-car-fuel-type-error','Fuel Type') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateImageFile('#edit-admin-car-main-photo','#edit-admin-car-main-photo-error','Main car photo') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
          }
  
     
      // let valid = validateCarName('#edit-admin-car-name','#add-admin-car-name-error','Name of car ') && validatePlateNumber('#add-admin-car-plate-number','#add-admin-car-plate-number-error','Plate number') && validateCarType('#add-admin-set-car-type','#add-admin-set-car-type-error') && validateCarCapacity('#add-admin-car-capacity','#add-admin-car-capacity-error') && validateImageFile('#add-admin-car-registration','#add-admin-car-registration-error','Car registration') && validateImageFile('#add-admin-car-photos','#add-admin-car-photos-error','Photos of cars') && validateCarDescription('#add-admin-car-description','#add-admin-car-description-error');
  
      if(valid)
      {
          $('.edit-form-step').hide()
          $('.edit-step-two').show() 
      }
  
          
      })
      $('.edit-step-1').on('click', function(){
          $('.edit-form-step').hide()
          $('.edit-step-one').show()
      })
      $('.edit-step-3').on('click', function(){
          let valid =  validatePickupLocation('#edit-admin-car-pickup-location','#edit-admin-car-pickup-location-error','Pick-up location');
          let driversFee = true;
          if($('#edit-admin-car-with-driver').is(':checked'))
          {
            driversFee =  validateCarDriversFee('#edit-admin-car-drivers-fee','#edit-admin-car-drivers-fee-error') ;
          }
          if(valid && driversFee)
          {
              $('.edit-form-step').hide()
              $('.edit-step-three').show()
          }  
         
          
      })
  
      $('#edit-car-form').on('submit',async function(event){
          event.preventDefault()
         
         
  
          function validateEditCarForm()
          {
  
              let valid = validateCarPrice('#edit-admin-car-price-cagayan-valley','#edit-admin-car-price-cagayan-valley-error','REGION II (CAGAYAN VALLEY)') && validateCarPrice('#edit-admin-car-price-central-luzon','#edit-admin-car-price-central-luzon-error','REGION III (CENTRAL LUZON)') &&  validateCarPrice('#edit-admin-car-price-calabarzon','#edit-admin-car-price-calabarzon-error','REGION IV-A (CALABARZON)') && validateCarPrice('#edit-admin-car-price-mimaropa','#edit-admin-car-price-mimaropa-error','REGION IV-B (MIMAROPA)') && validateCarPrice('#edit-admin-car-price-bicol-region','#edit-admin-car-price-bicol-region-error','REGION V (BICOL REGION)') && validateCarPrice('#edit-admin-car-price-ncr','#edit-admin-car-price-ncr-error','NATIONAL CAPITAL REGION (NCR)') && validateCarPrice('#edit-admin-car-price-car','#edit-admin-car-price-car-error','CORDILLERA ADMINISTRATIVE REGION (CAR)');
  
              if(!valid)
              {  
                  return false;
              }
              return true;
          }
          let formData = new FormData($(this)[0]);
  
           function submitEditCarForm()
          {
             $.ajax({
                  headers: {
                      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                  },
                  type: 'POST',
                  url:'/admin/edit-car',
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
                          $('.success-message').html('Car updated successfully!')
                          setTimeout(function(){
                              location.reload()  
                          },1500)  
                      }
                      else 
                      {  
                          $('.error-container').show()
                          $('.error-message').html('Edit car failed!')
                          $('#edit-car-form button[type="submit"]').removeClass('hidden')
                          setTimeout(function(){
                              $('.error-container').hide()  
                          },3000)
                      }
                      
                  },
                  error: function(){
                      $('.loading').removeClass('grid')
                      $('.loading').hide()
                      $('.error-container').show()
                      $('.error-message').html('System error edit car failed!')
                      $('#edit-car-form button[type="submit"]').removeClass('hidden')
                      setTimeout(function(){
                          $('.error-container').hide()
                      },3000)
                  }
              })
          }
          let validated = validateEditCarForm()
          
          
          if(validated){
              $('#edit-car-form button[type="submit"]').addClass('hidden')
              
              $('.loading').removeClass('hidden')
              $('.loading').addClass('grid')
             
              await   submitEditCarForm().catch(function(error){
                  $('.loading').removeClass('grid')
                  $('.loading').hide()
                  $('.error-container').show()
                  $('.error-message').html('File size is too large! Recommended 250 KB or lower')
                  $('#edit-car-form button[type="submit"]').removeClass('hidden')
                  setTimeout(function(){
                    $('.error-container').hide()
                  },3000)
              })
          }
  
      })


      var $tabLinks = $("[role='tab']");
      $tabLinks.each(function(){
          if ($(this).attr("aria-selected") === "true") {
              $(this).removeClass('text-blue-600 border-blue-600 border-transparent').addClass('text-accent-regular border-accent-regular');
          } 
      });
  
      $(document).on('click','[role="tab"]', function() {
         
              // Remove aria-selected attribute from current active tab
              $('[role="tab"]').attr("aria-selected", "false");
              $('[role="tab"]').attr('class','').addClass('text-gray-500 hover:text-accent-regular border-gray-100 hover:border-accent-regular inline-block p-4 border-b-2 border-transparent rounded-t-lg uppercase');
              // Add aria-selected attribute to clicked tab link
              $(this).attr("aria-selected", "true");
              $(this).removeClass('text-gray-500 border-gray-100 border-transparent').addClass('text-accent-regular border-accent-regular');
      });
  
      $("#arkilla-table").on("click",".updateBooking", async function (event) 
      {
              var account = $(this).children("button").attr("account");
              var row = $(this).parentsUntil("tbody");
              var booking_id = $(this).attr("booking_id");
              if(account === 'declined') var status = 'decline';
              else var status = 'approve'
  
              if(!confirm("Want to "+ status +" this booking?")) return false
              $(this).hide()
              $('.loading').removeClass('hidden')
              $('.loading').addClass('grid')
  
             async function updateBooking()
             {
              await  $.ajax({
                  headers: {
                      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                          "content"
                      ),
                  },
                  type: "post",
                  url: "/admin/update-booking-account",
                  data: { account: account, booking_id: booking_id },
                  success: function (resp) {
                      $('.loading').removeClass('grid')
                      $('.loading').hide()
                     
                      // alert(resp['data'])
                      // return
                      if(resp['data'] === 'approved')
                      {
                          $('.success-container').show()
                          $('.success-message').html('New booking approved successfully!')
                          // row.remove()
                          
                          setTimeout(function(){
                              location.reload()
                          },1500)
                      }    
                      else if(resp['data'] === 'declined')
                      {
                          $('.success-container').show()
                          $('.success-message').html('New booking declined successfully!')
                          
                          setTimeout(function(){
                              location.reload()
                          },1500)
                      }  
                      else
                      {
                          $('.error-container').show()
                          $('.error-message').html('Failed to '+ status +' booking!')
                          setTimeout(function(){
                              $('.error-container').hide()
                          },3000)
                        
                      } 
                          
                  },
                  error: function (resp) {
                      $('.loading').removeClass('grid')
                      $('.loading').hide()
                      $('.error-container').show()
                          $('.error-message').html('Booking '+status +' failed! System error.')
                          setTimeout(function(){
                              $('.error-container').hide()
                          },3000)
                  },
              });
          }
          await updateBooking();
      });
  
      $("#ongoing-transaction-table").on("click",".cancelBooking", async function (event) 
      {
          var account = $(this).children("button").attr("account");
          var booking_id = $(this).attr("booking_id");
          
  
          if(!confirm("Want to cancel this booking?")) return false
          $(this).hide()
          $('.loading').removeClass('hidden')
          $('.loading').addClass('grid')
          
          await  $.ajax({
              headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                      "content"
                  ),
              },
              type: "post",
              url: "/admin/cancel-booking",
              data: { account: account, booking_id: booking_id },
              success: function (resp) {
                  $('.loading').removeClass('grid')
                  $('.loading').hide()
                  
                  if(resp['data'] === 'cancelled')
                  {
                      $('.success-container').show()
                      $('.success-message').html('Booking cancelled successfully!')
                      // row.remove()
                      setTimeout(function(){
                          location.reload()
                          
                      },3000)
                  }    
                      
                  else
                  {
                      $('.error-container').show()
                      $('.error-message').html('Failed to cancel booking!')
                      setTimeout(function(){
                          $('.error-container').hide()
                      },3000)
                      
                  } 
                      
              },
              error: function (resp) {
                  $('.loading').removeClass('grid')
                  $('.loading').hide()
                  
                  $('.error-container').show()
                      $('.error-message').html('Booking cancel failed! System error.')
                      setTimeout(function(){
                          $('.error-container').hide()
                      },3000)
              },
          });
          
      });
  
      // DELETE CANCELLED BOOKING
      $(document).on("click",".confirmDeleteBooking", async function () 
      {
         
         
         
          var booking_id = $(this).attr("moduleid");
  
          if(!confirm("Want to delete this booking?")) return false
          $(this).hide()
        
              $('.loading').removeClass('hidden')
              $('.loading').addClass('grid')
  
        await  $.ajax({
              headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                      "content"
                  ),
              },
              type: "post",
              url: "/admin/delete-booking",
              data: { booking_id:booking_id },
              success: function (resp) {
                  $('.loading').removeClass('grid')
                  $('.loading').hide()
                  // alert(JSON.stringify(resp['data'],null,2))
                  // return
                  if(resp['data'] === 'success')
                      {
                          $('.success-container').show()
                          $('.success-message').html('Booking deleted successfully!')
                          // row.remove()
                          setTimeout(function(){
                              location.reload()
                          },3000)
                         
                      }    
                      else
                      {
                          $('.error-container').show()
                          $('.error-message').html('Failed to delete booking!')
                          setTimeout(function(){
                              $('.error-container').hide()
                          },4000)
                        
                      } 
              },
              error: function (resp) {
                  $('.loading').removeClass('grid')
                  $('.loading').hide()
                 
                  $('.error-container').show()
                      $('.error-message').html('Booking deletion failed! System error.')
                      setTimeout(function(){
                          $('.error-container').hide()
                      },3000)
              },
          });
      });
  
  
       // CONFIRM THE RETURN OF THE CAR
       $("#ongoing-transaction-table").on("click",".confirmReturn", async function () 
       {
         
          var booking_id = $(this).attr("bookingid");
  
          if(!confirm("Car is already returned?")) return false
          $(this).hide()
          $('.loading').removeClass('hidden')
          $('.loading').addClass('grid')
              
   
         await  $.ajax({
               headers: {
                   "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                       "content"
                   ),
               },
               type: "post",
               url: "/admin/booking-return-confirmed",
               data: { booking_id:booking_id },
               success: function (resp) {
                   $('.loading').removeClass('grid')
                   $('.loading').hide()
                //    alert(JSON.stringify(resp['data'],null,2))
                //    return
                   if(resp['data'] === 'success')
                       {
                           $('.success-container').show()
                           $('.success-message').html('Returned successfully!')
                           // row.remove()
                           setTimeout(function(){
                              location.reload()
                          },2000)
                           
                       }    
                       else
                       {
                           $('.error-container').show()
                           $('.error-message').html('Failed to return car!')
                           setTimeout(function(){
                               $('.error-container').hide()
                           },6000)
                         
                       } 
               },
               error: function (resp) {
                   $('.loading').removeClass('grid')
                   $('.loading').hide()
                  
                   $('.error-container').show()
                       $('.error-message').html('Return car failed! System error.')
                       setTimeout(function(){
                           $('.error-container').hide()
                       },3000)
               },
           });
       });
  
      

      //    ADD CAR CHECKLIST
    $(document).on('submit','.check-list-form', async function(event){
        event.preventDefault();
    
        if (event.target === this) {
            const error = $(this).find('.checklist-error');
            async function verifiedChecklist(form) {
                const fieldsToCheck = [
                    'windshield',
                    'hood',
                    'grill',
                    'frontPlate',
                    'bumper',
                    'headlights',
                    'rearWindow',
                    'bootTrunk',
                    'backPlate',
                    'rearBumper',
                    'tailLights',
                    'rightSideMirror',
                    'rightSideFrontFender',
                    'rightSideFrontDoorWindow',
                    'rightSideRearDoorWindow',
                    'rightSideFrontDoor',
                    'rightSideRearDoor',
                    'rightSideRearFender',
                    'rightSideFrontWheels',
                    'rightSideBackWheels',
                    'leftSideMirror',
                    'leftSideFrontFender',
                    'leftSideFrontDoorWindow',
                    'leftSideRearDoorWindow',
                    'leftSideFrontDoor',
                    'leftSideRearDoor',
                    'leftSideRearFender',
                    'leftSideFrontWheels',
                    'leftSideBackWheels',
                    'seatBelts',
                    'airbags',
                    'signalLights',
                    'hazardLights',
                    'frontExteriorLights',
                    'backExteriorLights',
                    'acceleratorPedal',
                    'breakPedal',
                    'clutchPedal',
                    'gearShift',
                    'steeringWheel',
                    'horn',
                ];
    
                for (const field of fieldsToCheck) {
                    const inputs = form.find(`input[name="${field}[]"]:checked`);
                    if (inputs.length === 0) {
                        error.text(`Please select ${field.split(/(?=[A-Z])/).join(' ').toLowerCase()}`).show();
                        setTimeout(function(){
                            error.hide();
                        },2000)
                        return false;
                    }
                }
               
                return true;
            }

            const checklistForm = $(this);
            const formData = $(checklistForm).serialize();
            
            async function submitChecklistForm()
            {
             await   $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    type: 'POST',
                    url:'/admin/car-checklist',
                    data:formData,
                    success:function(resp){
                        $(checklistForm).find('.loading').removeClass('grid')
                        $(checklistForm).find('.loading').hide()
                        //    console.log(JSON.stringify(resp['data'],null,2))
                        //    return
                        if(resp["data"] === 'success')
                        {
                            $(checklistForm).find('.success-container').show()
                            $(checklistForm).find('.success-message').html('Car checklist added successfully!')
                            setTimeout(function(){
                                location.reload() 
                            },2000)  
                        }
                        else 
                        {  
                            $(checklistForm).find('.error-container').show()
                            $(checklistForm).find('.error-message').html('Add car checklist failed!')
                            $(checklistForm).find('button[type="submit"]').addClass('hidden')
                            setTimeout(function(){
                                $('.error-container').hide()  
                            },3000)
                        }
                        
                    },
                    error: function(){
                        $(checklistForm).find('.loading').removeClass('grid')
                        $(checklistForm).find('.loading').hide()
                        $(checklistForm).find('.error-container').show()
                        $(checklistForm).find('.error-message').html('Internal error! add car checklist failed!')
                        $(checklistForm).find('button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                })
            }
            const isCheckListVerified = await verifiedChecklist($(this));
            if (isCheckListVerified) {
                if(!confirm("Confirm checklist?")) return false
                $(checklistForm).find('button[type="submit"]').addClass('hidden')
            
                $(checklistForm).find('.loading').removeClass('hidden')
                $(checklistForm).find('.loading').addClass('grid')
           
                await submitChecklistForm().catch(function(error){
                        $(checklistForm).find('.loading').removeClass('grid')
                        $(checklistForm).find('.loading').hide()
                        $(checklistForm).find('.error-container').show()
                        $(checklistForm).find('.error-message').html('System error! add car checklist failed!')
                        setTimeout(function(){
                            $(checklistForm).find('.error-container').hide()
                            // window.location.href =  window.location.href;  
                        },3000)
                    })
            }
           
        }
    });

    //   CAR BOOKING CALENDAR
            
    $('.date-input').each(function() {
        var input1 = $(this)[0];
        
        var data = $(input1).data('bookdates');
        var bookdates = [];

        for (let i = 0; i < data.length; i++) {
            if(data[i].status === 'approved' || data[i].status === 'ongoing')
            {
                var starts = new Date(data[i].start_date);
                var ends = new Date(data[i].end_date);
                var set = new Date(data[0].end_date);
                set.setDate(set.getDate() + 1);
            
                while (starts <= ends) {
                    bookdates.push(fecha.format(new Date(starts), 'YYYY-MM-DD'));
                    starts.setDate(starts.getDate() + 1);   
                }
            }
        }
        var picker = new Datepicker(input1, {
            inline: true,
            autoClose: false,
            disabledDates: bookdates,
            // onSelectRange: function() {
            //     console.log(input1.value)
            // }
            
        });
        
    });

     // Cache elements that are repeatedly used
     var $termsContent = $('.terms-content');
     var $termsLinks = $('.terms-link');
 
     function showContent(id, $link) {
         // Hide all content, show the selected one
         $termsContent.hide();
         $('#' + id).show();
 
         // Reset links and set the selected one to active
         $termsLinks.removeClass('text-accent-regular underline').addClass('text-black ');
         $link.removeClass('text-black ').addClass('text-accent-regular underline');
     }
 
     // Click event handlers
     $(document).on('click', '.terms', function() {
         showContent('terms', $(this));
     });
 
     $(document).on('click', '.privacy', function() {
         showContent('privacy', $(this));
     });
 
     $(document).on('click', '.cancellation', function() {
         showContent('cancellation', $(this));
     });
 
     $(document).on('click', '.guidelines', function() {
         showContent('guidelines', $(this));
     });
 
     $(document).on('click', '.nondiscrimination', function() {
         showContent('nondiscrimination', $(this));
     });

     $(document).on('click','.download-checklist',async function(event){
        var downloadBtn = $(this);
        
        $(downloadBtn).hide();
        $(downloadBtn).siblings('.small-loading').show();
       
       async function download(){
            var content = $(downloadBtn).closest('.content-container').find('.content');
               
            html2canvas(content[0]).then(canvas => {
                const link = document.createElement("a");
                link.download = "document.png";
                link.href = canvas.toDataURL();
                link.click();
                $(downloadBtn).siblings('.small-loading').hide();
                $(downloadBtn).show();
            });
        }
          
       await download();
    });
   
});
