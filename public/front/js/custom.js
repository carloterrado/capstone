
$(function(){
    

    // Form Validation

    // Validation for name input
    function validateName(nameID,errorElementID,type){
        let name = $(nameID).val();

        if(name.length == 0){
            $(errorElementID).html(type +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false;
        }
        if(!name.match(/^[A-Za-z\s]*$/ )){
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
    // Validation for email input
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
    // Validation for birthdate input
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
    // Validation for contact input
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
    // Validation for address input
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
    // Validation password input
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
    // Validation for confirm password input
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
    //   Validation for valid id choice
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
    //   Validation for valid image file
    function validateImageFile(imageID,errorElementID)
    {
        let validID = $(imageID).val();
        if(validID.length === 0)
        {
        
            $(errorElementID).show();
            $(errorElementID).html('File is required!');
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
        $(errorElementID).hide();
        return true;
    }
    //   Validation for terms and conditions
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
        
    $('#front-signup-first-name').on('keyup keypress',function()
    {
        validateName('#front-signup-first-name','#front-signup-first-name-error','Name');
    })
    $('#front-signup-last-name').on('keyup keypress',function()
    {
        validateName('#front-signup-last-name','#front-signup-last-name-error','Lastname');
    })
    $('#front-signup-email').on('keyup keypress',function()
    {
        validateEmail('#front-signup-email','#front-signup-email-error');
    })
    $('#front-signup-birthdate').on('keyup keypress',function()
    {
        validateBirthdate('#front-signup-birthdate','#front-signup-birthdate-error');
    })
    $('#front-signup-contact').on('keyup keypress',function()
    {
        validateContact('#front-signup-contact','#front-signup-contact-error');
    })
    $('#front-signup-address').on('keyup keypress',function()
    {
        validateAddress('#front-signup-address','#front-signup-address-error');
    })
    $('#front-signup-password').on('keyup keypress',function()
    {
        validatePassword('#front-signup-password','#front-signup-password-error');
    })
    $('#front-signup-confirm-password').on('keyup keydown',function()
    {
        validateConfirmPassword('#front-signup-password','#front-signup-confirm-password','#front-signup-confirm-password-error');
    }) 
    $('#front-signup-valid-id').on('click keypress',function(event)
    {
        validateValidID('#front-signup-valid-id','#front-signup-valid-id-error');
    })
    $('#front-signup-id-file').on('change',function(){
        validateImageFile('#front-signup-id-file','#front-signup-id-file-error')
    })
    //        Validate signup form upon submission
    $('#front-signup-form').on('submit',async function(event)
    {
        event.preventDefault();
     

       async function validateSignupForm(){
            let valid = validateName('#front-signup-first-name','#front-signup-first-name-error','First name') && validateName('#front-signup-last-name','#front-signup-last-name-error', 'Last name') && validateEmail('#front-signup-email','#front-signup-email-error') && validateBirthdate('#front-signup-birthdate','#front-signup-birthdate-error') && validateContact('#front-signup-contact','#front-signup-contact-error') &&      validateAddress('#front-signup-address','#front-signup-address-error') &&
            validatePassword('#front-signup-password','#front-signup-password-error') &&  validateConfirmPassword('#front-signup-password','#front-signup-confirm-password','#front-signup-confirm-password-error') && validateTerms('#front-signup-terms','#front-signup-terms-error');
           
            if(!valid)
            {  
                //  event.preventDefault();
                $('#front-signup-submit-form-error').show();
                $('#front-signup-submit-form-error').text('Please fill up the form correctly');
                setTimeout(function()
                {
                    $('#front-signup-submit-form-error').hide();
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
                url:'/signup',
                data:formData,
                processData: false,
                contentType: false,
                success:function(resp){
                    //  console.log(JSON.stringify(resp,null,2))
                    //  return
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    if(resp["status"] === 'success')
                    {
                        window.location.href = '/success';  
                    }
                    else if(resp["status"] === 'error')
                    {  
                        $('.error-container').show()
                        $('.error-message').html('Email is already registered!')
                        $('#front-signup-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()  
                        },3000)
                    }
                    else
                    {
                        $('.error-container').show()
                        $('.error-message').html('Email is already registered!')
                        $('#front-signup-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                },
                error: function(){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('System account registration failed!')
                    $('#front-signup-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                }
            })
        }
        let validated =await validateSignupForm()
       
        if(validated){
            $('#front-signup-form button[type="submit"]').addClass('hidden')
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
            
           await submitSignupForm().catch(function(error){
                $('#front-signup-form button[type="submit"]').removeClass('hidden')
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show()
                $('.error-message').html('System Error!')
                setTimeout(function(){
                    $('.error-container').hide()
                },3000)
            })
        } 
    })



    //        Login form validation for input value
    $('#front-login-email').on('keyup keypress',function()
    {
        validateEmail('#front-login-email','#front-login-email-error');
    })
    $('#front-login-password').on('keyup keypress',function()
    {
        validatePassword('#front-login-password','#front-login-password-error');
    })
    //        Validate signup form upon submission
    $('#front-login-form').on('submit',function(event){
        event.preventDefault();
    
        function validateLoginForm()
        {
            
            let valid = validateEmail('#front-login-email','#front-login-email-error') &&
            validatePassword('#front-login-password','#front-login-password-error');

            if(!valid)
            { 
            
                $('#front-login-submit-form-error').show();
                $('#front-login-submit-form-error').text('Please fill up the form correctly!');
                setTimeout(function()
                {
                    $('#front-login-submit-form-error').hide();
                },3000);
                return false;
            }
            return true;
        }
        let formData = new FormData($(this)[0]);
    
   
        async function submitLoginForm()
        {
            await $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: "POST",
                url: "/arkilla-login",
                data: formData,
                processData: false,
                contentType: false,
                success: function (resp) {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    if(resp['status'] === 'active')
                    {
                            window.location.href = '/';    
                    }
                    else if(resp['status'] === 'inactive')
                    {  
                        $('.error-container').show();
                        $('.error-message').html('Please check your email first and verify your account!');
                        $('#front-login-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){ 
                            $('.error-container').hide();
                        },3000)
                    }
                    else 
                    {  
                        $('.error-container').show();
                        $(".error-message").html('Invalid email or password!');
                        $('#front-login-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){ 
                            $('.error-container').hide();
                        },3000)
                    }
                    
                
                },
                error: function () {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show();
                    $(".error-message").html('System login failed!');
                    $('#front-login-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){ 
                        $('.error-container').hide();
                    },3000)
                },
            });
        }

        const validated = validateLoginForm();

        if(validated)
        {
            $('#front-login-form button[type="submit"]').addClass('hidden')
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
            submitLoginForm().catch(function(error){
                $('#front-login-form button[type="submit"]').removeClass('hidden')
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show();
                $(".error-message").html('System login failed!');
                setTimeout(function(){ 
                    window.location.href = '/login'; 
                },3000)
            });
        }
    });




    //        Forgot password form validation
    $('#forgot-password-email').on('keyup keypress',function()
    {
        validateEmail('#forgot-password-email','#forgot-password-email-error');
    })
    $('#forgot-password-form').on('submit', function(event)
    {
        event.preventDefault();
        let valid = validateEmail('#forgot-password-email','#forgot-password-email-error');
        let email = $('#forgot-password-email').val();
        if(valid)
        {
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/forgot-password',
                data: {email:email},
                success: function(resp)
                {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    // alert(JSON.stringify(resp['status']));
                    if(resp['status'] === 'found')
                    { 
                        $('.success-container').show()
                        $('.success-message').html('A temporary password was sent to your email!')
                        setTimeout(function(){
                            $('.success-container').hide()
                        },3000)
                    }
                    else if (resp['status'] === 'notfound')
                    {
                        $('.error-container').show()
                        $('.error-message').html('Email is not yet registered!')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    } 
                    else 
                    {
                        $('.error-container').show()
                        $('.error-message').html('Invalid email!')
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
                    $('.error-message').html('System forgot password failed!')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                }
            });
        }
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
             url: "/check-user-password",
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
     $('#change-pass-form').on('submit',async function(event)
     {
         event.preventDefault();
 
        async function validateChangePassForm()
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
                 url: "/update-password",
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
                         $('input').val('');
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
         const validated = await validateChangePassForm()
         if(validated){
            $('#change-pass-form button[type="submit"]').addClass('hidden')
            await submitPassword().catch(function(error){
                $('#change-pass-form button[type="submit"]').removeClass('hidden')
                 $('.error-container').show();
                 $(".error-message").html('Update password failed!');
                 setTimeout(function(){
                     $('.error-container').show();
                 },3000)
             });
         }      
     });



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
   
    //        Validate signup form upon submission
    $('#edit-profile-form').on('submit',async function(event)
    {
        event.preventDefault();

       async function validateSignupForm(){
            
            let valid = validateName('#edit-first-name','#edit-first-name-error','First name') && validateName('#edit-last-name','#edit-last-name-error', 'Last name') && validateBirthdate('#edit-birthdate','#edit-birthdate-error') && validateContact('#edit-contact','#edit-contact-error') &&  validateAddress('#edit-address','#edit-address-error');
          
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
        
        let formData = new FormData($(this)[0]);

        async function submitSignupForm()
        {
          await  $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/update-profile',
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
                        window.location.href = '/profile';   
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
        let validated = await validateSignupForm()
        
        
        if(validated){
        $('#edit-profile-form button[type="submit"]').addClass('hidden')
        
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
           await submitSignupForm().catch(function(error){
            $('#edit-profile-form button[type="submit"]').removeClass('hidden')
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show()
                $('.error-message').html('System update details failed!')
                setTimeout(function(){
                    window.location.href = '/profile';  
                },3000)
            })
        }
        
    })

    

    $('.sort-car').on('click',function(){
        $('#view-car-sort').slideToggle()
    })
    
    $(window).on('resize',function(){
        let mainWidth = $('body').width()
        if(mainWidth > 1024)
        {
            $('#view-car-sort').show()  
        }
    })

    $('#sortCar').on('submit', async function(event){
       
       async function sortCar(){
            const type = $('#type').val()
            const capacity = $('#capacity').val()
            const driver = $('#driver').val()
        
        
            if(type !== null && capacity !== null && driver !== null )
            {
            return true;  
            }
            else
            {
                event.preventDefault();
                $('#search-error-message').html('The above information is required!')
                setTimeout(function(){
                    $('#search-error-message').html('')
                },3000)
            }
        }
        await sortCar();
       
    })

    var $tabLinks = $("[role='tab']");
    $tabLinks.each(function(){
        if ($(this).attr("aria-selected") === "true") {
            $(this).removeClass('text-blue-600 border-blue-600 border-transparent').addClass('text-accent-regular border-accent-regular');
        } 
    });

    $(document).on('click','[role="tab"]', function() {
        if($([role="tab"]).hasClass('transaction-tab'))
        {
              // Remove aria-selected attribute from current active tab
        $('[role="tab"]').attr("aria-selected", "false");
        $('[role="tab"]').attr('class','').addClass('text-gray-500 hover:text-accent-regular border-gray-100 hover:border-accent-regular inline-block p-4 border-b-2 border-transparent rounded-t-lg sm:text-lg lg:text-2xl font-bold transaction-tab');
        // Add aria-selected attribute to clicked tab link
        $(this).attr("aria-selected", "true");
        $(this).removeClass('text-gray-500 border-gray-100 border-transparent').addClass('text-accent-regular border-accent-regular');

        }
        else
        {
        // Remove aria-selected attribute from current active tab
        $('[role="tab"]').attr("aria-selected", "false");
        $('[role="tab"]').attr('class','').addClass('text-gray-500 hover:text-accent-regular border-gray-100 hover:border-accent-regular inline-block p-4 border-b-2 border-transparent rounded-t-lg uppercase');
        // Add aria-selected attribute to clicked tab link
        $(this).attr("aria-selected", "true");
        $(this).removeClass('text-gray-500 border-gray-100 border-transparent').addClass('text-accent-regular border-accent-regular');
        }
      });

      $(document).on('click','.booking-btn',function(event){
        $('.booking-btn').removeAttr('class').addClass('booking-btn inline-block hover:text-accent-regular hover:border-accent-regular p-4 border-b-2 border-transparent rounded-t-lg sm:text-lg lg:text-2xl font-bold');
        if(event.target === this)
        {
            $(this).removeClass('border-transparent').addClass('text-accent-regular border-accent-regular')
        }
      })
      $(document).on('click','#ongoing',function(){
        $('.tables').hide();
        $('#ongoing-details').show();
      })
      $(document).on('click','#history',function(){
        $('.tables').hide();
        $('#history-details').show();
      })
   

    

   

    // FUNCTION TO UPDATE ALL FEE
    function updateFee(element,fee,driverFee,times,text)
    {
        $(element).text(text + ((parseFloat(fee) + parseFloat(driverFee)).toFixed(2)  * times).toLocaleString('en-US', {
            style: 'decimal',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
            useGrouping: true
        }));
    }
    
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
   

    //   DESTINATION

    const regions = $('div[data-regions]').data('regions');

    $.each(regions, function(index, region) {
        $("<option>").val(region.id).text(region.regDesc).appendTo('.region');
    });
    
    $(document).on('change','.region', function(event) {
        if(event.target === this)
        {
            const region_id = $(this).val();
            const prices = $(this).data('price');
            
        
            $('.province').html('<option disabled selected>Select Province</option>');
            $('.city').html('<option disabled selected>Select City</option>');
            $.each(regions, function(index, region) {
                if (region.id == region_id) {
                    $.each(region.province, function(index, province) {
                        $("<option>").val(province.id).text(province.provDesc).appendTo('.province');
                    });
                }   
                
            });
            const form = $(this).closest('form')
            

            $.each(prices, function(index, price){
                if(region_id == price.reg_id)
                {  
                    $(form).find('.car-price').val(parseFloat(price.price))
                  
                }  
            })
            
        } 
    });
    
    $(document).on('change','.province', function(event) {
    if(event.target === this)
    {
        var form = $(this).closest('form')

        var province_id = $(this).val();
        $('.city').html('<option disabled selected>Select City</option>');
        $.each(regions, function(index, region) {
            $.each(region.province, function(index, province) {
                if (province.id == province_id) {
                    $.each(province.city, function(index, city) {
                        $("<option>").val(city.id).text(city.citymunDesc).appendTo('.city');
                        $(form).find('.book-province').val(city.citymunDesc)
                    });
                }
            });
        });
    }
    });

    $(document).on('change','.city',function(event){
        if(event.target === this)
        {
            var form = $(this).closest('form')
            $(form).find('.book-city').val($(this).find(':selected').text())
        }
    });

  

    // DRIVER OPTIONS

    $(document).on('change','.driver', function(event) {
        if(event.target === this)
        {
           
            const driver = $(this).val();
            const driverFee = $(this).data('driver');
            const form = $(this).closest('form')
            const licenseContainer = $(form).find('.license-container');
           
             // CHECK IF WITH/WITHOUT DRIVER
             if(driver === "0")
             {
                 if($(licenseContainer).hasClass('hidden'))
                 {
                     $(licenseContainer).removeClass('hidden')
                 }
                 $(form).find('.driver-price').val(0)
             }
             else
             {
                 if(!$(licenseContainer).hasClass('hidden'))
                 {
                     $(licenseContainer).addClass('hidden')  
                 }
                 $(form).find('.driver-price').val(parseFloat(driverFee))
             }
           

            
        } 
    });
    
           
    function stepOneValidation(input)
    {
        
        if(input === null)
        {
            return false;
        }
        if(input.length === 0)
        {
            return false;
        }
        return true;
    } 
    function fullName(nameEl,errorElement,type){
        const name = nameEl.val()
        // const error = errorElement;
        
        if(name.length == 0){
            $(errorElement).html(type +' is required!');
            $(errorElement).css('color','lightcoral');
            return false;
        }
        if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
            // /^[A-Za-z]*$/ - characters only
            // /^[A-Za-z]*\s{1}[A-Za-z]*$/  name and lastname
            $(errorElement).html('Invalid fullname!');
            $(errorElement).css('color','lightcoral'); 
            return false;
        }
        if( name.length > 40){  
            $(errorElement).html(type + ' is too long!');
            $(errorElement).css('color','lightcoral');
            return false;
        }
        $(errorElement).html(type);
        $(errorElement).css('color','black');
        return true;
    } 
    function contact(contactEl,errorElement,text)
    {
        let contact = $(contactEl).val();
        let need = 11;
        let more = need - contact.length;
        if(contact.length === 0)
        {
            $(errorElement).html(text +' is required!');
            $(errorElement).css('color','lightcoral');
            return false;
        }
        if(!contact.match(/^09[0-9][0-9]*$/))
        {
            $(errorElement).html('Invalid ' + text +'!');
            $(errorElement).css('color','lightcoral');
            return false;  
        }
        if(contact.length < 11)
        {
            $(errorElement).html(more + ' more');
            $(errorElement).css('color','lightcoral');
            return false;  
        }
        if(contact.length > 11)
        {
            $(errorElement).html('Invalid '+ text);
            $(errorElement).css('color','lightcoral');
            return false;  
        }
        $(errorElement).html(text);
        $(errorElement).css('color','black');
        return true; 
    }
    function fileImageID(imageID,errorElementID,text)
    {
        let validID = $(imageID)[0].files;
        

        if(validID.length === 0)
        {

            $(errorElementID).html(text +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        for(var i=0; i < validID.length; i++){
            let file = validID[i]
            let fileName = file.name;
            let fileExtension = fileName.split('.').pop();
            if(fileExtension !== 'jpg' && fileExtension !== 'jpeg' && fileExtension !== 'gif' && fileExtension !== 'png')
            {
                $(errorElementID).html('Invalid ' + text + ' file');
                $(errorElementID).css('color','lightcoral');
                return false; 
            }
        }
        
        if(validID.length < 2)
        {
            $(errorElementID).html('One More Valid ID!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(validID.length > 2)
        {
            $(errorElementID).html(text + ' maximum is 2!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html(text);
        $(errorElementID).css('color','black');
        return true;
    }
    function fileImage(imageID,errorElementID,text)
    {
        let validID = $(imageID).val();
        if(validID.length === 0)
        {

            $(errorElementID).html(text +' is required!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(!validID.match(/\.(jpg|jpeg|gif|png)$/))
        {
            $(errorElementID).html('Invalid ' + text + ' file');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        $(errorElementID).html(text);
        $(errorElementID).css('color','black');
        return true;
    }
              

    $(document).on('keyup','.fullname',function(event){
        if(event.target === this)
        {
            const nameEl = $(this);
            const errorElement = $(nameEl).siblings('label');
            fullName(nameEl,errorElement,'Full Name')

        }
    })
    $(document).on('keyup','.contact',function(event){
        if(event.target === this)
        {
            const contactEl = $(this);
            const errorElement = $(contactEl).siblings('label');
            contact(contactEl,errorElement,'Contact')

        }
    })
    $(document).on('change', '.license', function(event){
        if(event.target === this)
        {
            const licenseEl = $(this);
           
            const errorElement = $(licenseEl).siblings('label');
            fileImage(licenseEl,errorElement,"Driver's License")
        }
    })
    $(document).on('change', '.valid-id', function(event){
        if(event.target === this)
        {
            const validIDEl = $(this);
            const errorElement = $(validIDEl).siblings('label');
            fileImage(validIDEl,errorElement,"Valid ID")
        }
    })
    $(document).on('change', '.valid-id-2', function(event){
        if(event.target === this)
        {
            const validIDEl = $(this);
            const errorElement = $(validIDEl).siblings('label');
            fileImage(validIDEl,errorElement,"Another Valid ID")
        }
    })
    $(document).on('change', '.utility', function(event){
        if(event.target === this)
        {
            const utilityEl = $(this);
            const errorElement = $(utilityEl).siblings('label');
            fileImage(utilityEl,errorElement,"Latest Electric/Water Bill")
        }
    })
    $(document).on('keyup','.address',function(event){
        if(event.target === this)
        {
            const addressEl = $(this);
            const errorElement = $(addressEl).siblings('label');
            validateAddress(addressEl,errorElement)

        }
    })
  
        //    Add car form validation
    $('.step-2').on('click', async function(event){
        if(event.target === this)
        {
            
            
            const stepTwo = $(this).closest('form');
           async function openStepTwo()
            {
                const dateInput = $(stepTwo).find('.date-input').val();
                const timeInput = $(stepTwo).find('.time-input').val();
                const timeEndInput = $(stepTwo).find('.time-end-input').val();
                const regionID = $(stepTwo).find('.region').val();
                const provinceID = $(stepTwo).find('.province').val();
                const cityID = $(stepTwo).find('.city').val();
                const driver = $(stepTwo).find('.driver').val();
            
                const valid = stepOneValidation(dateInput) && stepOneValidation(timeInput) && stepOneValidation(timeEndInput) && stepOneValidation(regionID) && stepOneValidation(provinceID) && stepOneValidation(cityID);
            
            
                if(valid)
                {  
                
                    var provinceName, cityName;
                    $.each(regions, function(index, region) {
                        if (region.id === parseInt(regionID)) 
                        {
                            $.each(region.province, function(index, province) {
                                if(province.id === parseInt(provinceID))
                                {
                                    provinceName = province.provDesc;
                                    $.each(province.city, function(index, city) {
                                        if(city.id === parseInt(cityID))
                                        {
                                            cityName = city.citymunDesc;
                                        }
                                    });
                                }
                            });
                        }    
                    });
                    // DISPLAY CONFIRM DESTINATION
                    $(stepTwo).find('.confirm-destination').text(cityName.toLowerCase() + ', ' + provinceName.toLowerCase());

                    // DISPLAY CONFIRM DRIVER OPTION
                    driver === "0" ? $(stepTwo).find('.confirm-driver').text('Self Drive') : $(stepTwo).find('.confirm-driver').text('With Driver');
                
                    var dates = dateInput.split(" - ");
                    var startDate = new Date(dates[0]).toLocaleDateString("en-us", { weekday: "short", year: "numeric", month: "short", day: "numeric" });
                    var endDate = new Date(dates[1]).toLocaleDateString("en-us", { weekday: "short", year: "numeric", month: "short", day: "numeric" });

                    var time = timeInput;
                    var hours = parseInt(time.substr(0, 2));
                    var minutes = time.substr(3, 2);
                    var ampm = hours >= 12 ? 'PM' : 'AM';
                    hours = (hours % 12) || 12;
                    var formattedTimeInput = hours + ':' + minutes + ' ' + ampm;

                    var timeEnd = timeEndInput;
                    var hoursEnd = parseInt(timeEnd.substr(0, 2));
                    var minutesEnd = timeEnd.substr(3, 2);
                    var ampmEnd = hoursEnd >= 12 ? 'PM' : 'AM';
                    hoursEnd = (hoursEnd % 12) || 12;
                    var formattedTimeEndInput = hoursEnd + ':' + minutesEnd + ' ' + ampmEnd;
                 
                    
                    // DISPLAY START AND END DATE
                    $(stepTwo).find('.confirm-start-date').text(startDate + ' ' + formattedTimeInput)
                    $(stepTwo).find('.confirm-end-date').text(endDate + ' ' + formattedTimeEndInput)



                    // Combine the dates and times into timestamps
                    var startTimestamp = Date.parse(`${dates[0]} ${timeInput}`);
                    var endTimestamp = Date.parse(`${dates[1]} ${timeEndInput}`);

                    // Calculate the difference between the timestamps in days
                    var diffTime = Math.abs(endTimestamp - startTimestamp);
                    var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                    var bookDays = diffDays;

                    // CHECK IF WITH/WITHOUT DRIVER
                    if(driver === "0")
                    {
                        $(stepTwo).find('.driver-price').val(0)
                    }
                    else
                    {
                        var initialDriverFee = $(stepTwo).find('.driver').data('driver')
                        $(stepTwo).find('.driver-price').val(parseFloat(initialDriverFee))
                    }

                    const region_id = $(stepTwo).find('.region').val();
                    const prices = $(stepTwo).find('.region').data('price');
                    $.each(prices, function(index, price){
                        if(region_id == price.reg_id)
                        {  
                            $(stepTwo).find('.car-price').val(parseFloat(price.price))
                          
                        }  
                    })
                    
                    // GET CAR PRICE AND DRIVER FEE VALUE
                    var newPrice = $(stepTwo).find('.car-price').val()
                    var driverFee = $(stepTwo).find('.driver-price').val()

                    $(stepTwo).find('.confirm-days-count').text('₱ '+ parseFloat(newPrice).toLocaleString('en-US', {
                        style: 'decimal',
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2,
                        useGrouping: true
                    }).replace(/^(\D+)/, '$1 ') + ' / Day')
                       

                    //  UPDATE CONFIRM RESERVATION
                    var confirmCarFee = $(stepTwo).find('.confirm-car-fee')
                    var confirmDriverFee = $(stepTwo).find('.confirm-driver-fee')
                    var confirmTotal = $(stepTwo).find('.confirm-total')
                    
                    updateFee(confirmCarFee,newPrice,0,bookDays,'₱')
                    updateFee(confirmDriverFee,0,driverFee,bookDays,'₱')
                    updateFee(confirmTotal,newPrice,driverFee,bookDays,'₱')

                   
                   
                    // SET ALL INPUT FEE VALUE
                    $(stepTwo).find('.car-price').val(parseFloat(newPrice) * bookDays)   
                    $(stepTwo).find('.driver-price').val(parseFloat(driverFee) * bookDays)   
                    $(stepTwo).find('.total-price').val((parseFloat(newPrice) + parseFloat(driverFee)) * bookDays)

                    // SHOW CUSTOMER DETAILS FORM
                    $(stepTwo).find('.form-step').hide()
                    $(stepTwo).find('.step-two').show() 
                }
                else
                {
                    $(stepTwo).find('.step1-error').removeClass('hidden');
                    setTimeout(function(){
                        $(stepTwo).find('.step1-error').addClass('hidden');
                    }, 3000);

                }
            }
            await openStepTwo();

        }
            
    })
    $('.step-1').on('click', function(event){
        if(event.target === this)
        {
            const stepOne = $(this).closest('form'); 
            $(stepOne).find('.form-step').hide();
            $(stepOne).find('.step-one').show();
        }
    })

    $('.step-3').on('click',async function(event){
        if(event.target === this)
        {
            const stepThree = $(this).closest('form');
           async function openStepThree()
            {
                const fullname = $(stepThree).find('.fullname');
                const fullNameError = $(fullname).siblings('label');
                const contactNumber = $(stepThree).find('.contact');
                const contactNumberError = $(contactNumber).siblings('label');
                const licenseImg = $(stepThree).find('.license');
                const licenseImgError = $(licenseImg).siblings('label');
                const validIDImg = $(stepThree).find('.valid-id');
                const validIDImgError = $(validIDImg).siblings('label');
                const validIDImg2 = $(stepThree).find('.valid-id-2');
                const validIDImg2Error = $(validIDImg2).siblings('label');
                const utilityImg = $(stepThree).find('.utility');
                const utilityImgError = $(utilityImg).siblings('label');
                const address = $(stepThree).find('.address');
                const addressError = $(address).siblings('label');
                const driver = $(stepThree).find('.driver').val();

                let valid = false;
                if(driver === "1")
                {
                    valid = fullName(fullname,fullNameError,'Full Name') && contact(contactNumber,contactNumberError) && fileImage(validIDImg,validIDImgError,"Valid ID") && fileImage(validIDImg2,validIDImg2Error,"Another Valid ID") && fileImage(utilityImg,utilityImgError, "Latest Electric/Water Bill") && validateAddress(address,addressError);
                }
                else
                {
                    valid = fullName(fullname,fullNameError,'Full Name') && contact(contactNumber,contactNumberError) && fileImage(licenseImg,licenseImgError, "Driver's License") && fileImage(validIDImg,validIDImgError,"Valid ID") && fileImage(validIDImg2,validIDImg2Error,"Another Valid ID") && fileImage(utilityImg,utilityImgError, "Latest Electric/Water Bill") && validateAddress(address,addressError);
                }
            
                if(valid )
                {
                    $(stepThree).find('.form-step').hide()
                    $(stepThree).find('.step-three').show()
                }
            }
            await openStepThree();
        }
       
        
    })        
         
    
    $(document).on('submit','.car-booking-form', async function(event){
        event.preventDefault()
        if(event.target === this)
        {
            const bookingForm = $(this);
             async  function validateBookingForm()
            {
                
                const dateInput = $(bookingForm).find('.date-input').val();
                const timeInput = $(bookingForm).find('.time-input').val();
                const timeEndInput = $(bookingForm).find('.time-end-input').val();
                const regionID = $(bookingForm).find('.region').val();
                const provinceID = $(bookingForm).find('.province').val();
                const cityID = $(bookingForm).find('.city').val();
                const driver = $(bookingForm).find('.driver').val();
                const fullname = $(bookingForm).find('.fullname');
                const fullNameError = $(fullname).siblings('label');
                const contactNumber = $(bookingForm).find('.contact');
                const contactNumberError = $(contactNumber).siblings('label');
                const licenseImg = $(bookingForm).find('.license');
                const licenseImgError = $(licenseImg).siblings('label');
                const validIDImg = $(bookingForm).find('.valid-id');
                const validIDImgError = $(validIDImg).siblings('label');
                const validIDImg2 = $(bookingForm).find('.valid-id');
                const validIDImg2Error = $(validIDImg2).siblings('label');
                const utilityImg = $(bookingForm).find('.utility');
                const utilityImgError = $(utilityImg).siblings('label');
                const address = $(bookingForm).find('.address');
                const addressError = $(address).siblings('label');
                const terms = $(bookingForm).find('.booking-terms');
                var termsError = $(bookingForm).find('.booking-form-error');
                

                var valid = false;
                if(driver === "1")
                {
                    valid = stepOneValidation(dateInput) && stepOneValidation(timeInput) && stepOneValidation(timeEndInput) && stepOneValidation(regionID) && stepOneValidation(provinceID) && stepOneValidation(cityID) && fullName(fullname,fullNameError,'Full Name') && contact(contactNumber,contactNumberError) && fileImage(validIDImg,validIDImgError,"Valid ID")  && fileImage(validIDImg2,validIDImg2Error,"Another Valid ID") && fileImage(utilityImg,utilityImgError, "Latest Electric/Water Bill") && validateAddress(address,addressError)  && validateTerms(terms,termsError);
                }
                else
                {
                    valid = stepOneValidation(dateInput) && stepOneValidation(timeInput) && stepOneValidation(timeEndInput) && stepOneValidation(regionID) && stepOneValidation(provinceID) && stepOneValidation(cityID) && fullName(fullname,fullNameError,'Full Name') && contact(contactNumber,contactNumberError) && fileImage(licenseImg,licenseImgError, "Driver's License") && fileImage(validIDImg,validIDImgError,"Valid ID")  && fileImage(validIDImg2,validIDImg2Error,"Another Valid ID") && fileImage(utilityImg,utilityImgError, "Latest Electric/Water Bill") && validateAddress(address,addressError) && validateTerms(terms,termsError);
                }
                if(valid)
                {
                    return true;
                }
                return false;
            }

            let formData = new FormData($(this)[0]);
            async function submitBookingForm()
            {
             await   $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    type: 'POST',
                    url:'/book-car',
                    data:formData,
                    processData: false,
                    contentType: false,
                    success:function(resp){
                        $(bookingForm).find('.loading').removeClass('grid')
                        $(bookingForm).find('.loading').hide()
                        //    alert(JSON.stringify(resp['data']))
                        //    $(bookingForm).find('button[type="submit"]').show()
                        //    return
                        if(resp["data"] === 'success')
                        {
                            $(bookingForm).find('.success-container').show()
                            $(bookingForm).find('.success-message').html('Car booking submitted successfully!')
                            setTimeout(function(){
                                window.location.href = '/reserved-car'; 
                            },2000)  
                        }
                        else 
                        {  
                            $(bookingForm).find('.error-container').show()
                            $(bookingForm).find('.error-message').html('Car booking failed!')
                            $(bookingForm).find('button[type="submit"]').show()
                            setTimeout(function(){
                                $('.error-container').hide()  
                            },3000)
                        }
                        
                    },
                    error: function(){
                        $(bookingForm).find('.loading').removeClass('grid')
                        $(bookingForm).find('.loading').hide()
                        $(bookingForm).find('.error-container').show()
                        $(bookingForm).find('.error-message').html('System error add car failed!')
                        $(bookingForm).find('button[type="submit"]').show()
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                })
            }

            const validated = await validateBookingForm()
            if(validated)
            {
                if(!confirm("Submit your booking?")) return false
                $(bookingForm).find('button[type="submit"]').hide()
            
                $(bookingForm).find('.loading').removeClass('hidden')
                $(bookingForm).find('.loading').addClass('grid')
           
                await submitBookingForm().catch(function(error){
                        $(bookingForm).find('.loading').removeClass('grid')
                        $(bookingForm).find('.loading').hide()
                        $(bookingForm).find('.error-container').show()
                        $(bookingForm).find('button[type="submit"]').show()
                        $(bookingForm).find('.error-message').html('File size is too large! recommended 250 KB or lower')
                       
                        setTimeout(function(){
                            $(bookingForm).find('.error-container').hide()
                            // window.location.href =  window.location.href;  
                        },3000)
                    })
            }
            else
            {
                var termsError = $(bookingForm).find('.booking-form-error');
                setTimeout(function(){
                    $(termsError).hide()
                },3000)
            }
            
        }
    })
    function amount(contactEl,errorElement,text)
    {
        let amount = $(contactEl).val();
      
        if(amount.length === 0)
        {
            $(errorElement).html(text +' is required!');
            $(errorElement).css('color','lightcoral');
            return false;
        }
        if(!amount.match(/^[0-9]*$/))
        {
            $(errorElement).html('Invalid ' + text +'!');
            $(errorElement).css('color','lightcoral');
            return false;  
        }
        if( parseInt(amount) === 300)
        {
            $(errorElement).html(text);
            $(errorElement).css('color','black');
            return true;  
        }
        
        $(errorElement).html('Invalid '+ text +'!');
        $(errorElement).css('color','lightcoral');
        return false;  
        
        
    }

    $(document).on('keyup','.sender-number',function(event){
        if(event.target === this)
        {
            const senderNumberEl = $(this);
            const errorElement = $(senderNumberEl).siblings('label');
            contact(senderNumberEl,errorElement,'GCash Number')

        }
    })
    $(document).on('keyup','.amount',function(event){
        if(event.target === this)
        {
            const amountEl = $(this);
            const errorElement = $(amountEl).siblings('label');
            amount(amountEl,errorElement,'Amount')

        }
    })
    $(document).on('submit','.reg-fee-form', async function(event){
        event.preventDefault()
       
        if(event.target === this)
        {
            const form = $(this);
           
            
            async function validateRegFeeForm()
            {
                const senderNumberEl = $(form).find('.sender-number');
                const senderNumberErrorElement = $(senderNumberEl).siblings('label');
                const amountEl = $(form).find('.amount');
                const amountErrorElement = $(amountEl).siblings('label');

                let valid = contact(senderNumberEl,senderNumberErrorElement,'GCash Number') && amount(amountEl,amountErrorElement,'Amount');

                if(valid)
                {
                    return true;
                }
                return false
            }

            let formData = new FormData($(this)[0]);
            async function submitRegFeeForm()
            {
             await   $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    type: 'POST',
                    url:'/book-car-reg-fee',
                    data:formData,
                    processData: false,
                    contentType: false,
                    success:function(resp){
                        $(form).find('.loading').removeClass('grid')
                        $(form).find('.loading').hide()
                        //    alert(JSON.stringify(resp['data']))
                        //    return
                        if(resp["data"] === 'success')
                        {
                            $(form).find('.success-container').show()
                            $(form).find('.success-message').html('Registration fee submitted successfully!')
                            setTimeout(function(){
                              
                                location.reload()
                            },2000)  
                        }
                        else 
                        {  
                            $(form).find('.error-container').show()
                            $(form).find('.error-message').html('Pay registration failed!')
                            $(form).find('button[type="submit"]').addClass('hidden')
                            setTimeout(function(){
                                $('.error-container').hide()  
                            },3000)
                        }
                        
                    },
                    error: function(){
                        $(form).find('.loading').removeClass('grid')
                        $(form).find('.loading').hide()
                        $(form).find('.error-container').show()
                        $(form).find('.error-message').html('Pay registration failed!')
                        $(form).find('button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                })
            }
            const validated = await validateRegFeeForm();
            if(validated)
            {
                if(!confirm("Submit registration fee?")) return false
                $(form).find('button[type="submit"]').addClass('hidden')
            
                $(form).find('.loading').removeClass('hidden')
                $(form).find('.loading').addClass('grid')
                
           
                await submitRegFeeForm().catch(function(error){
                        $(form).find('.loading').removeClass('grid')
                        $(form).find('.loading').hide()
                        $(form).find('.error-container').show()
                        $(form).find('.error-message').html('System, Pay registration failed!')
                        setTimeout(function(){
                            $(form).find('.error-container').hide()
                            // window.location.href =  window.location.href;  
                        },3000)
                    })

            }
            
        }
    })

    $("#ongoing-transaction-table").on("click",".cancelBooking", async function (event) 
    {
            const account = $(this).children("button").attr("account");
            const booking_id = $(this).attr("booking_id");
           const cancelButton = $(this);

            if(!confirm("Want to cancel this booking?")) return false
            $(cancelButton).hide()
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
           
            await  $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: "/cancel-booking",
                data: { account: account, booking_id: booking_id },
                success: function (resp) {
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    // $(cancelButton).show()
                    //    alert(JSON.stringify(resp['data']))
                    //    return
                    if(resp['data'] === 'cancelled')
                    {
                        $('.success-container').show()
                        $('.success-message').html('Booking cancelled successfully!')
                        // row.remove()
                        setTimeout(function(){
                            location.reload()
                           
                        },2000)
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
                    $(cancelButton).show()
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                },
            });
        
    });


    // DELETE CANCELLED BOOKING
    $("#ongoing-transaction-table").on("click",".confirmDelete", async function () 
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
            url: "/delete-booking",
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
                        location.reload()
                    }    
                    else
                    {
                        $('.error-container').show()
                        $('.error-message').html('Failed to delete booking!')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },6000)
                      
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



    // CONFIRM THE CHECKLIST OF THE CAR
    $("#ongoing-transaction-table").on("click",".confirmedChecklist", async function () 
    {
       var checklist = (this).closest('.checklist-form');
        var booking_id = $(this).attr("bookingid");

        if(!confirm("Checklist already confirmed?")) return false
        $(this).hide()
            $(checklist).find('.loading').removeClass('hidden')
            $(checklist).find('.loading').addClass('grid')

      await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            type: "post",
            url: "/booking-checklist-confirmed",
            data: { booking_id:booking_id },
            success: function (resp) {
                $(checklist).find('.loading').removeClass('grid')
                $(checklist).find('.loading').hide()
                // alert(JSON.stringify(resp['data'],null,2))
                // return
                if(resp['data'] === 'success')
                    {
                        $(checklist).find('.success-container').show()
                        $(checklist).find('.success-message').html('Checklist confirmed!')
                        // row.remove()
                        location.reload()
                    }    
                    else
                    {
                        $(checklist).find('.error-container').show()
                        $(checklist).find('.error-message').html('Failed to confirmed checklist!')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },6000)
                      
                    } 
            },
            error: function (resp) {
                $(checklist).find('.loading').removeClass('grid')
                $(checklist).find('.loading').hide()
               
                $(checklist).find('.error-container').show()
                    $(checklist).find('.error-message').html('Confirm checklist failed! System error.')
                    setTimeout(function(){
                        $(checklist).find('.error-container').hide()
                    },3000)
            },
        });
    });

    // RETURN BOOKING
    $("#ongoing-transaction-table").on("click",".confirmReturn", async function () 
    {
       
        var booking_id = $(this).attr("moduleid");
        const confirmReturn = $(this);

        if(!confirm("Want to return this booking?")) return false
        $(confirmReturn).hide()
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')

      await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            type: "post",
            url: "/return-booking",
            data: { booking_id:booking_id },
            success: function (resp) {
                $('.loading').removeClass('grid')
                $('.loading').hide()
                // alert(JSON.stringify(resp['data'],null,2))
                // $(confirmReturn).show()
                // return
                if(resp['data'] === 'success')
                    {
                        $('.success-container').show()
                        $('.success-message').html('Booking returned successfully!')
                        // row.remove()
                        location.reload()
                    }    
                    else
                    {
                        $('.error-container').show()
                        $('.error-message').html('Failed to returned booking!')
                        $(confirmReturn).show()
                        setTimeout(function(){
                            $('.error-container').hide()
                        },6000)
                      
                    } 
            },
            error: function (resp) {
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $(confirmReturn).show()
                $('.error-container').show()
                    $('.error-message').html('Booking return failed! System error.')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
            },
        });
    });

    $('textarea').each(function() {
        const text = $(this).val();
        const firstLine = text.split('\n')[0]; // get the first line of the text
        const cleanedText = text.replace(firstLine, firstLine.trim()); // remove leading white space from the first line
        $(this).val(cleanedText);
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
            link.download = "checklist.png";
            link.href = canvas.toDataURL();
            link.click();
            $(downloadBtn).siblings('.small-loading').hide();
            $(downloadBtn).show();
        });
    }
      
   await download();
});

    

  
});
