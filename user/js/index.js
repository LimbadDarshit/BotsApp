document.addEventListener('DOMContentLoaded' , function () {
    document.querySelector(".eye").addEventListener('click' , function (){
        document.querySelector('#pass').type =  (pass.type == 'password') ? 'text' : 'password' ;
        document.querySelector('#pass').focus();
    });    
});