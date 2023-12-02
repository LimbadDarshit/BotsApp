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
    <header class="bg_black">
        <div class="title">
            <img src="img/botsapp_white.png" onclick="tohomepage()">
            <h1 onclick="tohomepage()">BotsApp</h1>
            <p>-A Better place for chat.</p>
        </div>
    </header>

    <div class="side-bar bg_black">
        <div class="top">
            <!-- Personal -->
            <div class="options" title="Personal" onclick="tohomepage()">
                <div class="img">
                    <img src="img/icons/chat-30.png" alt="Chat" >
                </div>
                
            </div>
            
            <!-- group -->
            <div class="options" title="Groups" onclick="togroupchat()"> 
                <div class="img">
                    <img src="img/icons/group_chat-48.png" alt="Group">
                </div>
            </div>
        </div>
        
        <div class="bottom">
        
            <!-- settings -->
            <div class="options" title="Settings">
                <div class="img">
                    <img src="img/icons/setting-24.png"> 
                </div>
            </div>
            
            <!-- profile -->
            <div class="options profile"  title="Profile">
                <div class="img">
                    <img src="img/icons/default_dp.png">    <!-- insert php code to change profile img and title -->
                </div>
            </div>
        </div>
    </div>

    <!-- chat-box -->
    <div class="chat-box bg_box">
        <!-- chat-list -->
        <div class="chat-list">

            <div class="page-name">
                <h2 id="cname"></h3>
            </div>
            
            <div class="hr"></div>
            
            <!-- search-box -->
            <div class="search">
                <div>
                    <form action="#" method="post">
                        <input type="search" name="seach" placeholder="search">
                    </form>
                </div>
            </div>

            <!-- use php to get list from db -->
            <table class="list" > 
                <tbody>
                    <tr>
                        <td class="img">
                            <img src="img/default_dp.png">
                        </td>
                        <td class="details">
                            <h5>Name</h5>   <br>
                            <p>last chat here,</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="img">
                            <img src="img/default_dp.png">
                        </td>
                        <td class="details">
                            <h5>darshit</h5>   <br>
                            <p>last chat here,</p>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <!-- opened-chat -->
        <div class="chat">

        </div>
    </div>
    
</body>
</html>