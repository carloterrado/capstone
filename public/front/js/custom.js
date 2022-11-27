
$(function(){
    
    
    // Navigation part

   
    function  ChangeUrl(title, url) {  
        if (typeof(history.pushState) != "undefined") {  
           
            var obj = { Title: title, Url: url };  
            history.pushState( obj,obj.Title, obj.Url); 
            document.title = title; 
        } else {  
            alert("error loading the requested URL");  
        }  
    }  


    $('.home').on('click', async function()
    {
        // location.href = '#header';
        // ChangeUrl('Chesca Chen\'s Car Rental', '/'); 
        // $('.pages').hide();
        // $('#home').show();
       
 
    })
    $('.cars').on('click', async function()
    {
        // location.href = '#header';
        // ChangeUrl('Cars', '/cars'); 
        // $('.pages').hide();
        // $('#cars').show();
       
    })
    $('.about').on('click', function()
    {
        location.href = '#header';
        ChangeUrl('About Us', 'about');
        $('.pages').hide();
        $('#about').show();
    })
    $('.contact').on('click',  function()
    {
        // location.href = '#header';
        // ChangeUrl('Contact Us', '/contact'); 
        // $('.pages').hide();
        // $('#contact').show();
    })
    $('.front-login').on('click',  function()
    {        
        // location.href = '#header';
        // ChangeUrl('Login', '/arkilla-login');        
        // $('.pages').hide();
        // $('#front-login').show();
    })
    $('.front-signup').on('click',  function()
    { 
        // location.href = '#header';
        // ChangeUrl('Signup', '/arkilla-signup');   
        // $('.pages').hide();
        // $('#front-signup').show();
})
    
    // End Navigation

    // Form Validation

    // Validation for name input
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
    function validateImageFile(imageID,errorElementID)
    {
        let validID = $(imageID).val();
        if(validID.length === 0)
        {
        
            $(errorElementID).show();
            $(errorElementID).html('ID file is required!');
            $(errorElementID).css('color','lightcoral');
            return false; 
        }
        if(!validID.match(/\.(jpg|jpeg|gif|png)$/))
        {
            $(errorElementID).show();
            $(errorElementID).html('Invalid ID file');
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

        
    //    Signup form validation for input value
        
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

    // Validate form upon submission
    $('#front-signup-form').on('submit', function(event)
    {
        event.preventDefault();

        function validateSignupForm(){
            let valid = validateName('#front-signup-first-name','#front-signup-first-name-error','First name') && validateName('#front-signup-last-name','#front-signup-last-name-error', 'Last name') && validateEmail('#front-signup-email','#front-signup-email-error') && validateBirthdate('#front-signup-birthdate','#front-signup-birthdate-error') && validateContact('#front-signup-contact','#front-signup-contact-error') &&      validateAddress('#front-signup-address','#front-signup-address-error') &&
            validatePassword('#front-signup-password','#front-signup-password-error') &&  validateConfirmPassword('#front-signup-password','#front-signup-confirm-password','#front-signup-confirm-password-error')  && validateImageFile('#front-signup-license','#front-signup-license-error') && validateValidID('#front-signup-valid-id','#front-signup-valid-id-error') && validateImageFile('#front-signup-id-file','#front-signup-id-file-error') && validateTerms('#front-signup-terms','#front-signup-terms-error');
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
                    $('#modal-message').removeClass('hidden')
                    $('#modal-message').addClass('grid')
                    if(resp["status"] === 'success')
                    {
                      
                        setTimeout(function(){
                            $('#success-message').show();
                            $("#success-text").html('Account created successfully!');
                        },1000)
                        setTimeout(function(){
                            window.location.href = '/'; 
                        },2000)
                    }
                    else
                    {  
                        $('#error-message').show();
                        $("#error-text").html('Email already registered!');
                        setTimeout(function(){ 
                            window.location.href = '/login'; 
                        },2000)
                    }
                },
                error: function(){
                    $("#error-text").html('Email already registered!');
                    $('#modal-message').removeClass('hidden')
                    $('#modal-message').addClass('grid')
                    setTimeout(function(){ 
                        $('#error-message').show();
                    },2000)
                   
                    setTimeout(function(){
                        window.location.href = '/signup'; 
                    },2000)
                }
            })
        }
        let validated = validateSignupForm()
       
        if(validated){
            submitSignupForm().catch(function(error){
               
                $("#error-text").html('Email throws error!');
                $('#modal-message').removeClass('hidden')
                $('#modal-message').addClass('grid')
              
                setTimeout(function(){
                   
                    $('#error-message').show();
                },2000)
               
                setTimeout(function(){
                    $('#modal-message').removeClass('grid')
                    $('#modal-message').addClass('hidden')
                },2000)
            })
        } 
    })

    //    Login form validation for input value
    $('#front-login-email').on('keyup keypress',function()
    {
        validateEmail('#front-login-email','#front-login-email-error');
    })
    $('#front-login-password').on('keyup keypress',function()
    {
        validatePassword('#front-login-password','#front-login-password-error');
    })

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
                
                $('#modal-message').removeClass('hidden')
                $('#modal-message').addClass('grid')
                if(resp['status'] === 'success')
                {
                    setTimeout(function(){ 
                            $('#success-message').show();
                            $("#success-text").html('Login successfully!');
                    },1000)
                    setTimeout(function(){
                        window.location.href = '/'; 
                    },2000)
                }
                else
                {  
                    $('#error-message').show();
                    $("#error-text").html('Invalid email or password!');
                    setTimeout(function(){ 
                        window.location.href = '/login'; 
                    },2000)
                }
                
               
            },
            error: function () {
               
                $('#modal-message').removeClass('hidden')
                $('#modal-message').addClass('grid')
               
                setTimeout(function(){
                    $('#error-message').show();
                    $("#error-text").html('Invalid email or password!');
                },1000)
                setTimeout(function(){
                    $('#modal-message').removeClass('grid')
                    $('#modal-message').addClass('hidden')
                },2000)
               
            },
        });
    }

    const validated = validateLoginForm();

    if(validated)
    {
        submitLoginForm().catch(function(error){
           
            $('#modal-message').removeClass('hidden')
            $('#modal-message').addClass('grid')
            setTimeout(function(){
            
                $('#error-message').show();
                $("#error-text").html('Account login failed!');
            },1000)
            
            setTimeout(function(){
                $('#modal-message').removeClass('grid')
                $('#modal-message').addClass('hidden')
            },2000)
           
        });
    }
    });
   
});
