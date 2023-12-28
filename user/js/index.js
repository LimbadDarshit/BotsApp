

document.addEventListener('DOMContentLoaded' , function () {
     // globle variable
 input_field = document.querySelectorAll('.input_field');
 email = document.querySelector('#e-mail');
 pass = document.querySelector('#pass');
 submit_btn = document.querySelector('.submit input');
 buttons = document.querySelectorAll('.button input');
 // 
    // chnage button toggle
    document.querySelector('input[name="change"]').addEventListener( 'click' , function (){

        let title = (form.className.includes('sign-in')) ? 'log-in' : 'sign-in' ;
        var toggle_field = document.querySelectorAll(".toggle_field");
        
        if(title == 'log-in') {
            form.classList.replace('sign-in' , 'log-in');            
            // label change
                // user
                document.querySelector('label[for="user"]').innerHTML = "Enter Username / E-mail";
            
            // hide sign-in fields
                toggle_field.forEach(ele => {hide(ele)});
            
        }  else{
            form.classList.replace('log-in' , 'sign-in');
            
            // label change
                // user
                document.querySelector('label[for="user"]').innerHTML = "Enter Username";
            
            // show sign-in fields
            toggle_field.forEach(ele => {show(ele)});
            
        } 

        // set form action path
        set_form_action_path();

        // content chnage
            // hading h1
            document.querySelector('.heading > h1').innerHTML = title;
            // buttons
            buttons[0].value = title;
            buttons[1].value = (title == 'sign-in') ? 'log-in' : 'sign-in';

    });
    // 

    //load animation
    document.querySelector('.box').style.opacity='1';
    document.querySelectorAll('.fadeout').forEach( ele => {
        fade_in(ele);
    });

    form.querySelectorAll('.button input')[0].attributes.removeNamedItem('disabled');
    form.querySelectorAll('.button input')[1].attributes.removeNamedItem('disabled');
    // 

});

// set_form_action_path
function set_form_action_path() {
    let form_action_path = "/functionality/_user.php?";
    var form_action =(form.className.includes('log-in')) ? form_action_path+"action=log-in" : form_action_path+"action=sign-in";
    form.setAttribute('action' , form_action);
}

// eye img toggle   
    function toggle_pass_box(img){
        let pass = (img.classList.contains('con_eye') != true) ? document.forms['form']['pass'] : document.forms['form']['con_pass'] ;
        pass.type =  (pass.type == 'password') ? 'text' : 'password' ;
        pass.focus();
    }
// 

//toggle sign-in fields hide class
function hide(ele)  {
    ele.classList.add('hide');
}

function show(ele)  {
    ele.classList.remove('hide');
}

//swipe dowm effect
function fade_in(ele){
    ele.classList.replace('fadeout' , 'fadein');
}
function fade_out(ele){
    ele.classList.replace('fadein' , 'fadeout');
}

// validation
    // e-mail 
    function email_validation() {
        var email_span = document.querySelector('#e-mail_span');

        _submit_btn_disable(); 
        if( email.value == "" ) {

            email_span.innerHTML = "Enter Your Email...";
            email_span.style.display = 'block';

        }else if( ( (email.value.indexOf('.')) == -1 || (email.value.indexOf('.') != email.value.lastIndexOf('.')) ) ||
                  ( (email.value.indexOf('@')) == -1 || (email.value.indexOf('@') != email.value.lastIndexOf('@')) ) ||
                  (email.value.indexOf('.') < email.value.indexOf('@')) ) 
        {
            email_span.innerHTML = "Email is wrong!!!";
            email_span.style.display = 'block';
        }   else {
            email_span.style.display = 'none';
            _submit_btn_enable(); 
        }
    }

    // password validation
    function pass_validation()  {
        var pass_rules = document.querySelector('#pass_rules');

        // regex
        var has_uppercase = /[A-Z]/.test(pass.value);
        var has_lowercase = /[a-z]/.test(pass.value);
        var has_digits = /[\d]/.test(pass.value);
        var has_symbols = /[@#$%]/.test(pass.value);
        // 

        // prefix
        pass_rules.style.display='block';
        pass_rules.querySelectorAll('span').forEach(ele => {ele.style.display = 'none'});
        _submit_btn_disable();
        // 

        // conditions
        if(pass.value == "")    {
            pass_rules.querySelector('span[name="1"]').style.display = "block";
        }else if(pass.value.length < 8) {
            pass_rules.querySelector('span[name="2"]').style.display = "block";
        }else if(_is_all_char_same(pass.value)){
            pass_rules.querySelector('span[name="3"]').style.display = "block";
        }else if( !has_uppercase || !has_lowercase || !has_digits || !has_symbols)  {
            pass_rules.querySelector('span[name="4"]').style.display = "block";
        }else   {
            pass_rules.style.display='none';
            _submit_btn_enable();
        }
        // 

    }

    function _is_all_char_same(str)  {
        var first_char = str[0];

        if(str.length == 1) {
            return false;
        }
        
        for(let i=0 ; i<str.length ; i++)  {
            if(first_char != str[i]) {
                return false;
            }
        }
        return true;
    }

    function con_pass_validation()  {
        var con_pass = document.querySelector('#con_pass');
        
    }

    function _submit_btn_disable() {
        submit_btn.setAttribute('disabled' , 'true');
    }

    function _submit_btn_enable() {
        var validation_fields = document.querySelectorAll('.validation');

        validation_fields.forEach(field => {
            if(field.style.display == 'block')  {
                return;
            }
        });
        submit_btn.removeAttribute('disabled');
    }
// 

