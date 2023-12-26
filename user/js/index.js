document.addEventListener('DOMContentLoaded' , function () {

    //load animation
    document.querySelector('.box').style.opacity='1';

    document.querySelectorAll('.fadeout').forEach( ele => {
        fade_in(ele);
    });
    // 

    // chnage button toggle
    document.querySelector('input[name="change"]').addEventListener( 'click' , function (){

        let title = (form.className.includes('log-in')) ? 'log-in' : 'sign-in' ;
        var input_field = document.querySelectorAll('.input_field');
        var toggle_field = document.querySelectorAll(".toggle_field");
        // var buttons = form.querySelectorAll('.button input');
        
        if(title == 'log-in') {
            form.classList.replace('log-in' , 'sign-in');
            title = 'sign-in';
        }  else{
            form.classList.replace('sign-in' , 'log-in');
            title = 'log-in';
        } 
        
        console.log( title);
        // console.log(input_field);

        if(title == 'log-in'){

            // label change
                // user
                document.querySelector('label[for="user"]').innerHTML = "Enter Username / E-mail";
        }   else    {
            // label change
                // user
                document.querySelector('label[for="user"]').innerHTML = "Enter Username";
        }

    });
    // 

});

// eye img toggle   
    function toggle_pass_box(img){
        let pass = (img.classList.contains('con_eye') != true) ? document.forms['form']['pass'] : document.forms['form']['con_pass'] ;
        pass.type =  (pass.type == 'password') ? 'text' : 'password' ;
        pass.focus();
    }
// 

//toggle extra form fields
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

