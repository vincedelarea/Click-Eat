$(function(){
    $("#signup_email").on('blur', function(){
        
        var email = $("#signup_email").val();
        $.ajax({
            url: 'validate_signup.php',
            type: 'post',
            data: {
                'email_check': 1,
                'email': email,
            },
            success: function(response){
                if(IsEmail(email) == true){
                    if(response.trim() == 'taken'){
                        $("#email_err").text("Another user is already using this email.");
                        $("#signup_email").addClass("border border-danger");
                    }else if(response.trim() == 'not_taken'){
                        $("#email_err").text('');
                        $("#signup_email").removeClass("border border-danger");
                    }
                }else if(IsEmail(email) == false && email != ''){
                    $("#email_err").text("Invalid email.");
                    $("#signup_email").addClass("border border-danger");
                }else if(email == ''){
                    
                }
            }

        });
    });

    $("#singup_fname").on('blur', function(){

        let fname = $("#singup_fname").val();
        
    });

    $("#signup_pass, #signup_cpass").on('blur', function(){
        
        let pass = $("#signup_pass").val();
        let cpass = $("#signup_cpass").val();
        if(pass != cpass && (pass != '' && cpass != '')){
            $("#pass_err, #cpass_err").text("Password does not match.");
            $("#signup_pass, #signup_cpass").addClass("border border-danger");
        }else if(pass == cpass){
            $("#pass_err, #cpass_err").text('');
            $("#signup_pass, #signup_cpass").removeClass("border border-danger");
        }
    });

    $("#signup_phone").on('blur', function(){
        let phone = $("#signup_phone").val();
        if(phone.match(/^[0-9]+$/) != null || phone == ''){
            $("#phone_err").text('');
            $("#signup_phone").removeClass("border border-danger");
        }else{
            $("#phone_err").text("Phone number invalid.");
            $("#signup_phone").addClass("border border-danger");
        }
    });

});

function IsEmail(email){
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)){
        return false;
    }else{
        return true;
    }
}

function formValidateSignup(){
    let email = $('#email_err').val();
    let fname = $('#fname_err').val();
    let pass = $('#pass_err').val();
    let cpass = $('#cpass_err').val();
    let phone = $('#phone_err').val();

    let valid_counter = 0;

    if(email == ''){
        valid_counter += 1;
    }
    if(fname ==''){
        valid_counter +=1;
    }
    if(pass == '' && cpass == ''){
        valid_counter +=1;
    }
    if(phone == ''){
        valid_counter +=1;
    }
    if(valid_counter==4){
        alert("success");
        return true;
    }
    return false;
}

