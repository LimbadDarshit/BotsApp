document.addEventListener('DOMContentLoaded' , function () {
    // title of the list page
    document.querySelector('#cname').innerHTML = document.title;

    // skeleton animation stop 
    const ani_ele = document.querySelectorAll('.list img , .list h5 , .list p');
            // animation elements
    ani_ele.forEach(function (element) {
        element.classList.remove('skeleton');
        element.classList.remove('skeleton-text');
    });

    // texter chat select
    // const texter = document.querySelectorAll(".texter");
    // for (var i = 0; i < texter.length; i++) {
    //     texter[i].addEventListener('click', function () {
    //         this.classList.add('select');
    //     });
        
    // }

});


// Navigation start  //chnage all urls
function tohomepage()   {
    window.location.assign('/botsapp/');
}

function togroupchat()  {
    window.location.assign('/botsapp/group_chat.php');
}
