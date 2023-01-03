$(function(){
    $('.menu').on('click', function()
    {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.bx-chevron-right').toggleClass('rotate-90');
    });


    // Form Validation

    // Validation function for first name and last name
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
            $(errorElementID).html('Input must be 6-20 Characters Long.');
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
                        $('.success-container').show()
                        $('.success-message').text('New admin account created successfully!')
                        setTimeout(function(){
                            $('.success-container').hide()
                            window.location.href = '/admin/all-admins'
                        },1500)
                    }
                    
                    else if(resp["status"] === 'error')
                    {  
                        $('.error-container').show()
                        $('.error-message').html('Email is already registered!')
                        $('#add-admin-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                    else
                    {
                        $('.error-container').show()
                        $('.error-message').html('Email is already registered!')
                        $('#add-admin-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                    
                },
                error: function(error){
                    // alert(JSON.stringify(error))
                    $('.error-container').show()
                    $('.error-message').html('Email is already registered!')
                    $('#add-admin-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').hide()  
                    },3000)
                    
                    
                }
            })
        }
        let validated = validateSignupForm()
        
        if(validated){
            $('#add-admin-form button[type="submit"]').addClass('hidden')
            submitSignupForm().catch(function(error){
                $('#add-admin-form button[type="submit"]').removeClass('hidden')
                $('.error-container').show()
                $('.error-message').html('Add admin failed!')
                setTimeout(function(){
                    $('.error-container').hide()  
                },3000)
            })
        } 
    })



   
    //    Change Admin  Password
    $('#update-password').on('click', function(event)
    {
        if(event.target === this)
        {     
           $('#update-password input').val('');
        }
    });
    $('.close-btn').on('click', function()
    {
           $('#update-password input').val('');
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
                $('.error-container').show();
                $(".error-message").html('Update password failed!');
                $('#change-pass-form button[type="submit"]').removeClass('hidden')
                setTimeout(function(){
                    $('.error-container').show();
                },3000)
            });
        }      
    });



    //   Profile form validation
    $('#edit-first-name').on('keyup keypress',function()
    {
        validateName('#edit-first-name','#edit-first-name-error','Firstname');
    })
    $('#edit-last-name').on('keyup keypress',function()
    {
        validateName('#edit-last-name','#edit-last-name-error','Lastname');
    })
    //        Validate profile form upon submission
    $('#edit-profile-form').on('submit', function(event)
    {
        event.preventDefault();
        

        function validateSignupForm(){
                
            
          
                let valid = validateName('#edit-first-name','#edit-first-name-error','First name') && validateName('#edit-last-name','#edit-last-name-error', 'Last name');
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
                        },3000)  
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



    //         Update admin status
    $('#arkilla-table').on("click",".updateAdminStatus", async function () 
    {
        var status = $(this).children("svg").attr("status");
        var admin_id = $(this).attr("admin_id");
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
        url: "/admin/update-admin-status",
        data: { status: status, admin_id: admin_id },
        success: function (resp) {
            // alert(JSON.stringify(resp['status']))
            if (resp["status"] === 0) {
                $("#admin-" + admin_id).html(
                    '<svg status="Inactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#e84949" fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94L8.28 7.22Z" clip-rule="evenodd"/></svg>'
                );
            } else if (resp["status"] === 1) {
                $("#admin-" + admin_id).html(
                    '<svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>'
                );
            }
        },
        error: function (resp) {
            alert("error");
        },
    });
        
    });
    //         Update user status
    $('#arkilla-table').on("click",".updateUserStatus", async function () 
    {
        var status = $(this).children("svg").attr("status");
        var user_id = $(this).attr("user_id");
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
        url: "/admin/update-user-status",
        data: { status: status, user_id: user_id },
        success: function (resp) {
            // alert(JSON.stringify(resp['status']))
            if (resp["status"] === 0) {
                $(".updateUserStatus").html(
                    '<svg status="Inactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#e84949" fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94L8.28 7.22Z" clip-rule="evenodd"/></svg>'
                );
            } else if (resp["status"] === 1) {
                $(".updateUserStatus").html(
                    '<svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>'
                );
            }
        },
        error: function (resp) {
            alert("error");
        },
    });
        
    });
    //         Approve or Decline admin
    $("#arkilla-table").on("click",".updateAdminAccount", async function () 
    {
        var account = $(this).children("button").attr("account");
        var row = $(this).parentsUntil("tbody");
        var admin_id = $(this).attr("admin_account_id");

        if(!confirm("Want to "+ account +" this account?")) return false
        $('.loading').removeClass('hidden')
        $('.loading').addClass('grid')
      await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            type: "post",
            url: "/admin/update-admin-account",
            data: { account: account, admin_id: admin_id },
            success: function (resp) {
                $('.loading').removeClass('grid')
                $('.loading').hide()
                if(resp['data'] === 'verified')
                {
                    row.remove()
                }    
                else if(resp['data'] === 'declined')
                {
                    row.remove()
                } 
                    
                else
                {
                    alert('Failed to '+ account +' admin!')
                } 
                    
            },
            error: function (resp) {
                $('.loading').removeClass('grid')
                $('.loading').hide()
                alert(account +" failed! System error.")
            },
        });
    });
    //         Delete admin
    $("#arkilla-table").on("click",".confirmDelete", async function () 
    {
        var row = $(this).parentsUntil("tbody");
        var module = $(this).attr("module");
        var type = $(this).attr("admin-type");
        var admin_id = $(this).attr("moduleid");

        if(!confirm("Want to delete this "+ type + "?")) return false

      await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            type: "post",
            url: "/admin/delete-" + module,
            data: { admin_id:admin_id },
            success: function (resp) {
                if(resp['status'] === 'deleted') row.remove()
                else alert('Failed to delete '+ type +'!')
            },
            error: function (resp) {
                alert("Delete failed! System error.")
            },
        });
    });


    //       Car type form validation
    $('#add-admin-car-type').on('keyup keypress',function()
    {
        validateName('#add-admin-car-type','#add-admin-car-type-error','Car type');
    })
    //       Validate add car type form upon submission
    $('#add-car-type-form').on('submit', function(event)
    {
        event.preventDefault();

        function validateSignupForm(){
            let valid = validateName('#add-admin-car-type','#add-admin-car-type-error','Car type') ;
            if(!valid)
            {  
                //  event.preventDefault();
                $('#add-car-type-submit-form-error').show();
                $('#add-car-type-submit-form-error').text('Please fill up the form correctly');
                setTimeout(function()
                {
                    $('#add-car-type-submit-form-error').hide();
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
                url:'/admin/add-car-type',
                data: data,
                success:function(resp){ 
                    if(resp["status"] === 'success')
                    {
                        $('.success-container').show()
                        $('.success-message').text('New car type created successfully!')
                        setTimeout(function(){
                           window.location.href = '/admin/car-types'
                        },3000)
                    }
                    
                    else
                    {
                        $('.error-container').show()
                        $('.error-message').html('Car type already exist!')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                    
                },
                error: function(error){
                    // alert(JSON.stringify(error))
                    $('.error-container').show()
                    $('.error-message').html('Sytem Add new car type failed!')
                    setTimeout(function(){
                        $('.error-container').hide()  
                    },3000)
                    
                    
                }
            })
        }
        let validated = validateSignupForm()
        
        if(validated){
            submitSignupForm().catch(function(error){
                
                $('.error-container').show()
                $('.error-message').html('Http Add new car type failed!')
                setTimeout(function(){
                    $('.error-container').hide()  
                },3000)
            })
        } 
    })
    //       Delete car type
     $("#arkilla-table").on("click",".confirmDeleteCartype", async function () 
     {
        
         var id = $(this).attr("moduleid");
         var cartype = $(this).attr("cartype");
 
         if(!confirm("Want to delete car type "+ cartype+"?")) return false
 
       await  $.ajax({
             headers: {
                 "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                     "content"
                 ),
             },
             type: "post",
             url: "/admin/delete-car-type",
             data: { id:id },
             success: function (resp) {
                 if(resp['status'] === 'deleted') 
                 {
                     window.location.href = '/admin/car-types' 
                 }
                 else alert('Failed to delete '+cartype +'!')
             },
             error: function (resp) {
                 alert("Delete failed! System error.")
             },
         });
     });
    //       Car type form validation
    $('#edit-admin-car-type').on('keyup keypress',function()
    {
            validateName('#edit-admin-car-type','#edit-admin-car-type-error','Car type');
    })
    $(document).on('click','.edit-car-type', function(){

        $('#edit-admin-car-type-error').html('Car type');
        $('#edit-admin-car-type-error').css('color','black');
        var cartype = $(this).attr('cartype');
        $('#edit-admin-car-type').val(cartype)
        var id = $(this).attr('id');
        $('#edit-admin-car-type-id').val(id)
    })
    $('#edit-car-type-form').on('submit', function(event)
    {
        event.preventDefault();

        function validateSignupForm(){
            let valid = validateName('#edit-admin-car-type','#edit-admin-car-type-error','Car type') ;
            if(!valid)
            {  
                //  event.preventDefault();
                $('#edit-car-type-submit-form-error').show();
                $('#edit-car-type-submit-form-error').text('Please fill up the form correctly');
                setTimeout(function()
                {
                    $('#edit-car-type-submit-form-error').hide();
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
                url:'/admin/edit-car-type',
                data: data,
                success:function(resp)
                { 
                    // alert(JSON.stringify(resp['status']))

                    if(resp["status"] === 'success')
                    {
                        $('.success-container').show()
                        $('.success-message').text('Car type updated successfully!')
                        setTimeout(function(){
                           window.location.href = '/admin/car-types'
                        },3000)
                    }
                    
                    else
                    {
                        $('.error-container').show()
                        $('.error-message').html('Car type already exist!')
                        $('#edit-car-type-form button[type="submit"]').removeClass('hidden')
                        setTimeout(function(){
                            $('.error-container').hide()
                        },3000)
                    }
                    
                },
                error: function(error)
                {
                    // alert(JSON.stringify(error))
                    $('.error-container').show()
                    $('.error-message').html('Sytem update car type failed!')
                    $('#edit-car-type-form button[type="submit"]').removeClass('hidden')
                    setTimeout(function(){
                        $('.error-container').hide()  
                    },3000)
                       
                }
            })
        }
        let validated = validateSignupForm()
        
        if(validated){
            $('#edit-car-type-form button[type="submit"]').addClass('hidden')
            submitSignupForm().catch(function(error){
                
                $('.error-container').show()
                $('.error-message').html('Http update car type failed!')
                setTimeout(function(){
                    $('.error-container').hide()  
                },3000)
            })
        } 
    })
     //         Update car type status
     $('#arkilla-table').on("click",".updateCarTypeStatus", async function () 
     {
         var status = $(this).children("svg").attr("status");
         var cartype_id = $(this).attr("cartype_id");
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
         url: "/admin/update-car-type-status",
         data: { status: status, cartype_id: cartype_id },
         success: function (resp) {
             // alert(JSON.stringify(resp['status']))
             if (resp["status"] === 0) {
                 $("#cartype-" + cartype_id).html(
                     '<svg status="Inactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#e84949" fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94L8.28 7.22Z" clip-rule="evenodd"/></svg>'
                 );
             } else if (resp["status"] === 1) {
                 $("#cartype-" + cartype_id).html(
                     '<svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>'
                 );
             }
         },
         error: function (resp) {
             alert("error");
         },
     });
         
     });





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
    function validateImageFile(imageID,errorElementID,imageType)
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
    // $('#add-admin-car-registration').on('change', function(){
    //     validateImageFile('#add-admin-car-registration','#add-admin-car-registration-error','Car registration')
    // })
    $('#add-admin-car-photos').on('change', function(){
        validateImageFile('#add-admin-car-photos','#add-admin-car-photos-error','Photos of cars')
    })
   
    $('#add-admin-car-main-photo').on('change', function(){
        validateImageFile('#add-admin-car-main-photo','#add-admin-car-main-photo-error','Main car photo')
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

        let valid = validateCarName('#add-admin-car-name','#add-admin-car-name-error','Name of car ') && validatePlateNumber('#add-admin-car-plate-number','#add-admin-car-plate-number-error','Plate number') && validateCarType('#add-admin-set-car-type','#add-admin-set-car-type-error') && validateCarCapacity('#add-admin-car-capacity','#add-admin-car-capacity-error') && validateImageFile('#add-admin-car-main-photo','#add-admin-car-main-photo-error','Main car photo') && validateImageFile('#add-admin-car-photos','#add-admin-car-photos-error','Photos of cars') && validateCarDescription('#add-admin-car-description','#add-admin-car-description-error');
        
      
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
        let valid =  validatePickupLocation('#add-admin-car-pickup-location','#add-admin-car-pickup-location-error','Pick-up location');
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
    //       Update car status
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
             valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Name of car ') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateImageFile('#edit-admin-car-main-photo','#edit-admin-car-main-photo-error','Main car photo') && validateImageFile('#edit-admin-car-photos','#edit-admin-car-photos-error','Photos of cars') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
        }
        if(carPhotos.length === 0 && mainPhoto.length === 0)
        {
            valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Name of car ') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
        }
        if(carPhotos.length !== 0 && mainPhoto.length === 0)
        {
             valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Name of car ') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateImageFile('#edit-admin-car-photos','#edit-admin-car-photos-error','Photos of cars') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
        }
        if(carPhotos.length === 0 && mainPhoto.length !== 0)
        {
            valid = validateCarName('#edit-admin-car-name','#edit-admin-car-name-error','Name of car ') && validatePlateNumber('#edit-admin-car-plate-number','#edit-admin-car-plate-number-error','Plate number') && validateCarType('#edit-admin-set-car-type','#edit-admin-set-car-type-error') && validateCarCapacity('#edit-admin-car-capacity','#edit-admin-car-capacity-error') && validateImageFile('#edit-admin-car-main-photo','#edit-admin-car-main-photo-error','Main car photo') && validateCarDescription('#edit-admin-car-description','#edit-admin-car-description-error');
        }

   

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
                            window.location.href = '/admin/cars';   
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
                $('.error-message').html('System edit car failed!')
                setTimeout(function(){
                    window.location.href = '/admin/cars';  
                },3000)
            })
        }

    })

    //         Approve or Decline Car
    $("#arkilla-table").on("click",".updateCarAccount", async function () 
    {
        var account = $(this).children("button").attr("account");
        var row = $(this).parentsUntil("tbody");
        var car_id = $(this).attr("car_account_id");
        var email = $(this).attr("owner_email");
        var name = $(this).attr("owner_name");

        if(!confirm("Continue to "+ account +" this car?")) return false
        $('.loading').removeClass('hidden')
        $('.loading').addClass('grid')
    await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            type: "post",
            url: "/admin/update-car-account",
            data: { 
                account: account,
                car_id: car_id,
                email: email,
                name: name
            },
            success: function (resp) {
                $('.loading').removeClass('grid')
                $('.loading').hide()
            //   alert(JSON.stringify(resp['data']))
                if(resp['data'] === 'verified')
                {
                    row.remove()
                }    
                else if(resp['data'] === 'declined')
                {
                    row.remove()
                } 
                    
                else
                {
                    alert('Failed to '+ account +' car!')
                } 
                    
            },
            error: function (resp) {
                $('.loading').removeClass('grid')
                $('.loading').hide()
                alert(account +" failed! System error.")
            },
        });
    });
    
});