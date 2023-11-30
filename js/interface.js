document.addEventListener('DOMContentLoaded' , function () {
    const cname = document.querySelector('#cname');

    cname.innerHTML = document.title;
});

// Navigation start  //chnage all urls

function tohomepage()   {
    window.location.assign('/botsapp/');
}

function togroupchat()  {
    window.location.assign('/botsapp/group_chat.php');
}
// nav end
