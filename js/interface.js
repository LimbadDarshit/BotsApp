document.addEventListener('DOMContentLoaded' , function () {
    // title of the list page
    document.querySelector('#cname').innerHTML = document.title;

    // skeleton animation stop 
    const ani_ele = document.querySelectorAll('.list img , .list h5 , .list p');
            // animation elements
    ani_ele.forEach(function (element) {
        element.classList.add('stop-animation');
        console.log(element);
    });
    console.log(ani_ele);

    // skeleton end

});


// Navigation start  //chnage all urls
function tohomepage()   {
    window.location.assign('/botsapp/');
}

function togroupchat()  {
    window.location.assign('/botsapp/group_chat.php');
}
// nav end
