// Navigation start  //chnage all urls
function tohomepage()   {
    window.location.assign('/botsapp/');
}

function togroupchat()  {
    window.location.assign('/botsapp/group_chat.php');
}

document.addEventListener('DOMContentLoaded' , function () {
    // title of the list page
    document.querySelector('#cname').innerHTML = document.title;

                                                        // i should use img or ele.loaded to stop the skeleton animation rather then the whole dom content
    // skeleton animation stop 
    const ani_ele = document.querySelectorAll('.list img , .list h5 , .list p');
            // animation elements
    ani_ele.forEach(function (element) {
        element.classList.remove('skeleton');
        element.classList.remove('skeleton-text');
    });

    //settings-box setting option toggle
    const li = document.querySelectorAll(".settings-box ul li");
    li.forEach( function (ele) {
        ele.addEventListener('click' , function (){
            if(!(ele.classList.contains('selected')))    {
                remove_selected_li();
                ele.classList.add('selected');

                const bodyname = ele.getAttribute("name") + "-body";
                console.log(bodyname);
                const corrosponding_body = document.querySelector(".settings-box .settings-container .body[name="+bodyname+"");

                console.log(corrosponding_body);

            }
        })
    });
    console.log();


    //profile edit toggle
    document.querySelectorAll('.edit-icon').forEach( function (edit_icon) {
        edit_icon.addEventListener('click' , function (){
            var flex =  edit_icon.closest(".flex");
            if(flex)    {
                var text_box = flex.querySelector(".text");
                text_box.classList.toggle("edit");
                text_box.toggleAttribute('disabled');
            }
        })
    });


});

// toggle settings-box
function toggle_settings_box()   {
    const settings_box = document.querySelector(".settings-box");
    if (!settings_box.classList.contains('settings-box_show')) {
        settings_box.classList.add('settings-box_show');
        settings_box.classList.remove('settings-box_hide');
        (!event.target.closest("div[title='Profile']"))  ?
            document.querySelector(".settings-box ul li[name='general']").classList.add('selected') :
            document.querySelector(".settings-box ul li[name='profile']").classList.add('selected')    ;
        
        document.addEventListener('click' , closesettingsbox);
    } else {
        settings_box.classList.add('settings-box_hide');
        settings_box.classList.remove('settings-box_show');
        remove_selected_li();
        document.removeEventListener('click' , closesettingsbox);
    }
}

//remove selected from li
function remove_selected_li(){
    document.querySelectorAll(".settings-box ul li").forEach( function (row) {
        if(row.classList.contains('selected'))  {
            row.classList.remove('selected');
        }
    })
} 

function closesettingsbox(event) {
    settings_box =  document.querySelector(".settings-box");
    

    if((!settings_box.contains(event.target)) &&
        (settings_box != event.target) && 
        (!event.target.closest("div[title='Settings']"))&&
        (!event.target.closest("div[title='Profile']")) ) {
        toggle_settings_box();
    }
}


// dispose space

// document.querySelector("div[title='Settings']").addEventListener( 'click' , function () {
        
    // })
    // inbox-user chat select
    // const inbox-user = document.querySelectorAll(".inbox-user");
    // for (var i = 0; i < inbox-user.length; i++) {
    //     inbox-user[i].addEventListener('click', function () {
    //         this.classList.add('select');
    //     });
        
    // }

// function select_options(div)    {
//     const img = div.querySelector("img");
        
//         if(div.classList.contains("selected")) {
//             div.classList.remove("selected");
//         }   
//         else    {
//             div.classList.add("selected");
//         }
//         // console.log(div);
// }
