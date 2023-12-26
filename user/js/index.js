document.addEventListener('DOMContentLoaded' , function () {

    //load animation
    document.querySelector('.box').style.opacity='1';

    document.querySelectorAll('.fadeout').forEach( ele => {
        fade_in(ele);
    });
    // 

    // chnage button toggle
    document.querySelector('input[name="change"]').addEventListener( 'click' , function (){
        
        var title = (form.className.includes('log-in')) ? 'log-in' : 'sign-in' ;
        var toggle_field = document.querySelectorAll(".toggle_field");
        var buttons = form.querySelectorAll('.button input');

        form.classList.replace (title == 'log-in') ? ('log-in' , 'sign-in') : ('sign-in' , 'log-in');

        toggle_field.forEach(element => {
            (title == 'log-in') ? hide(element) : show(element) ;
        });
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

