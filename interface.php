<!-- bots app -->
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="img/botsapp_white.png" type="image/png">

    <!-- Style -->  
    <link rel="stylesheet" href="css/interface.css" type="text/css">
    <!-- Script -->
    <script type="text/javascript" src="js/interface.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
</head>
<body>
    <header>
        <div class="title">
            <img src="img/botsapp_white.png" onclick="tohomepage()">
            <h1 onclick="tohomepage()">BotsApp</h1>
            <p>-A Better place for chat.</p>
        </div>
    </header>

    <div class="side-bar">
        <div class="top">
            <!-- Personal -->
            <div class="options" title="Personal" onclick="tohomepage()" >
                <div class="img">
                    <img src="img/icons/options/chat-30.png" alt="Chat" >
                </div>
                
            </div>
            
            <!-- group -->
            <div class="options" title="Groups" onclick="togroupchat()"> 
                <div class="img">
                    <img src="img/icons/options/group_chat-48.png" alt="Group">
                </div>
            </div>
        </div>
        
        <div class="bottom">
            <!-- settings -->
            <div class="options" title="Settings" onclick="toggle_settings_box()">
                <div class="img">
                    <img src="img/icons/options/setting-24.png"> 
                </div>
            </div>
            
            <!-- profile -->
            <div class="options profile"  title="Profile">
                <div class="img">
                    <img src="img/default_dp.png">    <!-- insert php code to change profile img and title -->
                </div>
            </div>
        </div>
    </div>
    <!-- settings-box -->
    <div class="settings-box settings-box_hide">
        <ul>
            <li class="selected">
                <div>
                    <img src="img/icons/settings/general/general-64.png" height="20px" width="20px" alt="" >
                </div>    
                <p>General</p>
            </li>
            <li class="">
                <div>
                    <img src="img/icons/settings/general/account-64.png" height="20px" width="20px" alt="" >
                </div>    
                <p>Account</p>
            </li>
            <li class="">
                <div>
                    <img src="img/icons/settings/general/chat-64.png" height="20px" width="20px" alt="" >
                </div>    
                <p>Chat</p>
            </li>
            <li class="">
                <div>
                    <img src="img/icons/settings/general/help-64.png" height="20px" width="20px" alt="" >
                </div>    
                <p>Help</p>
            </li>
        </ul>

        <div class="">

        </div>
    </div>
    
</body>
</html>