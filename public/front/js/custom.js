
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
    $('#front-signup-form').on('submit', function(event)
    {
        event.preventDefault();
     

        function validateSignupForm(){
            let valid = validateName('#front-signup-first-name','#front-signup-first-name-error','First name') && validateName('#front-signup-last-name','#front-signup-last-name-error', 'Last name') && validateEmail('#front-signup-email','#front-signup-email-error') && validateBirthdate('#front-signup-birthdate','#front-signup-birthdate-error') && validateContact('#front-signup-contact','#front-signup-contact-error') &&      validateAddress('#front-signup-address','#front-signup-address-error') &&
            validatePassword('#front-signup-password','#front-signup-password-error') &&  validateConfirmPassword('#front-signup-password','#front-signup-confirm-password','#front-signup-confirm-password-error')  && validateValidID('#front-signup-valid-id','#front-signup-valid-id-error') && validateImageFile('#front-signup-id-file','#front-signup-id-file-error') && validateTerms('#front-signup-terms','#front-signup-terms-error');
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
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/signup',
                data:formData,
                processData: false,
                contentType: false,
                success:function(resp){
                    //  alert(JSON.stringify(resp))
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
        let validated = validateSignupForm()
       
        if(validated){
            $('#front-signup-form button[type="submit"]').addClass('hidden')
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
            
            submitSignupForm().catch(function(error){
                $('#front-signup-form button[type="submit"]').removeClass('hidden')
                $('.loading').removeClass('grid')
                $('.loading').hide()
                $('.error-container').show()
                $('.error-message').html('System account registration failed!')
                setTimeout(function(){
                    window.location.href = '/signup';  
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
         const validated = validateChangePassForm()
         if(validated){
            $('#change-pass-form button[type="submit"]').addClass('hidden')
             submitPassword().catch(function(error){
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
      $('#edit-valid-id').on('click keypress',function(event)
      {
          validateValidID('#edit-valid-id','#edit-valid-id-error');
      })
      //        Validate signup form upon submission
      $('#edit-profile-form').on('submit', function(event)
      {
          event.preventDefault();

          function validateSignupForm(){
                
              let license = $('#edit-license').val() 
              let valid_id_file = $('#edit-id-file').val() 
               
              if(license.length !== 0 && valid_id_file.length !== 0)
              {
                let valid = validateName('#edit-first-name','#edit-first-name-error','First name') && validateName('#edit-last-name','#edit-last-name-error', 'Last name') && validateBirthdate('#edit-birthdate','#edit-birthdate-error') && validateContact('#edit-contact','#edit-contact-error') &&  validateAddress('#edit-address','#edit-address-error')  && validateValidID('#edit-valid-id','#edit-valid-id-error') && validateImageFile('#edit-id-file','#edit-id-file-error') && validateLicenseFile('#edit-license','#edit-license-error');
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
              else if(license.length === 0 && valid_id_file.length !== 0)
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
              else if(license.length !== 0 && valid_id_file.length === 0)
              {
                let valid = validateName('#edit-first-name','#edit-first-name-error','First name') && validateName('#edit-last-name','#edit-last-name-error', 'Last name') && validateBirthdate('#edit-birthdate','#edit-birthdate-error') && validateContact('#edit-contact','#edit-contact-error') && validateAddress('#edit-address','#edit-address-error')  && validateValidID('#edit-valid-id','#edit-valid-id-error') && validateLicenseFile('#edit-license','#edit-license-error');
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

    $('#sortCar').on('submit',function(event){
        event.preventDefault();
        const type = $('#type').val()
        const capacity = $('#capacity').val()
        const driver = $('#driver').val()
       
      
        if(type !== null && capacity !== null && driver !== null )
        {
      
            // this.form.submit();
            $('.loading').removeClass('hidden')
            $('.loading').addClass('grid')
            const formData = new FormData($(this)[0]);
        
            
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: 'POST',
                url:'/cars',
                data:formData,
                processData: false,
                contentType: false,
                success:function(data){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    //    alert(JSON.stringify(data['data']))
                    //    return false
                    $('.car_filter').html(data)
                    const mainWidth = $('body').width()
                    if(mainWidth < 1024)
                    {
                        $('#view-car-sort').slideToggle() 
                    }
                },
                error: function(){
                    $('.loading').removeClass('grid')
                    $('.loading').hide()
                    $('.error-container').show()
                    $('.error-message').html('System error! filter car failed.')
                    setTimeout(function(){
                        $('.error-container').hide()
                    },3000)
                }
            })
        }
        else
        {
            $('#search-error-message').html('The above information is required!')
            setTimeout(function(){
                $('#search-error-message').html('')
            },3000)
        }
       
    })
      
    
   
});
