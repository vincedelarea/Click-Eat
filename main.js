$(function(){
    
});

function IsEmail(email){
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)){
        return false;
    }else{
        return true;
    }
}

function formValidateLogin(){
    let email = $('#email').val()
    let pass = $('#pass').val()

    if(email=='' || pass == ''){

    }
    if(email || pass != ''){

    }
    if(IsEmail(email) == false){
        test = $('#error_label').text();
    }
    
}

function formValidateSignup(){
    let email = $('#signup_email').val();
    let fname = $('#signup_fname').val();
    let pass = $('#signup_pass').val();
    let cpass = $('#signup_cpass').val();
    let phone = $('#signup_phone').val();

    let valid_counter = 0;

    if(IsEmail(email) == true){
        valid_counter += 1;
    }
    if(fname != '' && email != '' && pass != '' && cpass != '' && phone != ''){
        valid_counter +=1;
    }
    if(pass==cpass && pass != ''){
        valid_counter +=1;
    }
    if(phone.match(/^[0-9]+$/) != null){
        valid_counter +=1;
    }
    if(valid_counter==4){
        return true;
    }
    return false;
}

