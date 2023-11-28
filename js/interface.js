// Navigation start  //chnage all urls
document.addEventListener('DOMContentLoaded' , function () {
    const options = document.getElementsByClassName('options');

    options[0].addEventListener( 'click' ,function () {
        tohomepage();
    });

    options[1].addEventListener( 'click' ,function () {
        window.location.assign('/botsapp/group_chat.php');
    });
});

function tohomepage()   {
    window.location.assign('/botsapp/');
}

// nav end