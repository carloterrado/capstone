$(function(){
    
    // Navigation part

    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    function  ChangeUrl(title, url) {  
        if (typeof(history.replaceState) != "undefined") {  
           
            var obj = { Title: title, Url: url };  
            history.replaceState( obj,obj.Title, obj.Url); 
            document.title = title; 
        } else {  
            alert("error loading the requested URL");  
        }  
    }  

    async function  getPage(url){
        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "GET",
            url: "/"+ url,
            data: { CSRF_TOKEN },
            success: function (data) {  
                console.log(data) 
                $('.main-content').html(data)  
            },
            error: function (error) {
             console.log(error)
            },
        });
    }


    $('.home').on('click',  function()
    {
        let url = 'partial-content/home';
        ChangeUrl('Chesca Chen\'s Car Rental', '/'); 
        getPage(url);   
    })
    $('.cars').on('click',  function()
    {
        let url = 'partial-content/cars';
        ChangeUrl('Cars', '/cars'); 
        getPage(url);   
    })
    $('.about').on('click', function()
    {
        let url = 'partial-content/about';
        ChangeUrl('About Us', 'about');
        getPage(url);  
    })
    $('.contact').on('click',  function()
    {
        let url = 'partial-content/contact';
        ChangeUrl('Contact Us', '/contact'); 
        getPage(url);   
    })
    $('.front-login').on('click',  function()
    { 
        let url = 'partial-content/login';
        ChangeUrl('Login', '/arkilla-login'); 
        getPage(url);   
    })
    $('.front-signup').on('click',  function()
    { 
        let url = 'partial-content/signup';
        ChangeUrl('Signup', '/arkilla-signup'); 
        getPage(url);   
    })
    
    // End Navigation

    // Signup Form

    // Validation for name input

    function validateName(nameID,errorElementID){
        let name = $(nameID).val();
    
        if(name.length == 0){
           
            $(errorElementID).html('Fullname is required!');
            return false;
        }
        if(!name.match(/^[a-zA-Z]+( [a-zA-Z]+)+$/)){
            // /^[A-Za-z]*$/ - characters only
            // /^[A-Za-z]*\s{1}[A-Za-z]*$/  name and lastname
            $(errorElementID).html('Please enter correct fullname!'); 
            return false;
        }
        if( name.length > 30){  
            $(errorElementID).html('Invalid fullname!');
            return false;
        }
        $(errorElementID).html('');
        return true;
    }
    // Validation for email input

    // Validation password input

      function validatePassword(passwordID,errorElementID)
      {
          let newpass = $(passwordID).val();
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
              $(errorElementID).html('Uppercase Character is Required');
              return false;
          }
      
          const isContainsLowercase = /^(?=.*[a-z])/;
          if (!isContainsLowercase.test(newpass)) {
              $(errorElementID).html('Lowercase Character is Required');
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
  
  
      // Validation for confirm password input
  
      function validateConfirmPassword(passwordID,confirmPasswordID,errorElementID)
      {
          let newpass = $(passwordID).val();
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
  
  
     
  //    Reset input value
  
      $('.close-btn').on('click', function()
      {
             $('input').next().html('');
             $('input').val('');
      });
     
   
      $('#front-signup-name').on('keyup keypress',function()
      {
          validateName('#front-signup-name','#front-signup-name-error');
      })
      $('#front-signup-password').on('keyup keypress',function()
      {
          validatePassword('#front-signup-password','#front-signup-password-error');
      })
      $('#front-signup-confirm-password').on('keyup keydown',function()
      {
          validateConfirmPassword('#front-signup-password','#front-signup-confirm-password','#front-signup-confirm-password-error');
      })

      // Validate the form before the form upon submission 
      $('#front-signup-form').on('submit', function(event)
      {
          event.preventDefault();
  
          function validateSignupForm()
          {  
              let valid = validateName('#front-signup-name','#front-signup-name-error') && validatePassword('#front-signup-password','#front-signup-password-error') &&  validateConfirmPassword('#front-signup-password','#front-signup-confirm-password','#front-signup-confirm-password-error');
                  if(!valid)
                  { 
                      $('#front-signup-submit-error').show();
                      $('#front-signup-submit-error').text('Please fill up the form correctly');
                      setTimeout(function()
                      {
                          $('#front-signup-submit-error').hide();
                      },3000);
                      return false;
                  }
                  return true;
          }
         async function submitForm()
         {
              var password = $("#front-signup-password").val();
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
          const validated = validateSignupForm()
          if(validated){
              submitForm().catch(function(error){
                  $('#error-message').show();
                  $("#error-text").html('Registration Failed!');
                  setTimeout(function(){
                      $('#error-message').show();
                  },3000)
              });
          }      
      });
   
});
