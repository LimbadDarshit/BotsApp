<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>

    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="../css/interface.css" type="text/css">
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="../js/interface.js"></script>
</head>
<body onload="document.forms['form']['user'].focus()">
    <header style="background-color: rgb(5, 33, 60) ;">
        <div class="title">
            <img src="../img/botsapp_white.png" onclick="tohomepage()">
            <h1 onclick="tohomepage()">BotsApp</h1>
            <p>-A Better place for chat.</p>
        </div>
    </header>
    <div class="square-container"> 
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span>
        <span class="square"></span><span class="square"></span><span class="square"></span>
    </div>

    <div class="box">

        <div class="heading">
            <h1 class="fadeout">Log-in</h1>
            <p class="fadeout">Enter Your username/e-mail and password</p>  
        </div>

        <form action="#" method="post" id="form" name="form" class="log-in" enctype="multipart/form-data">

            <!-- user -->
            <div class="input_field fadeout" name="user_field">
                <div class="input">
                    <input type="text" id="user" name="user" placeholder=" " autocomplete="off"/>
                    <label for="user">Enter Username / E-mail</label>
                </div>
            </div>
            
            <!-- Name -->
            <div class="input_field fadeout name toggle_field" name="name_field" >
                <div class="input">
                    <input type="text" id="first-name" name="first-name" placeholder=" " autocomplete="off" />
                    <label for="first-name">Enter First Name</label>
                </div>
                <div class="input">
                    <input type="text" id="last-name" name="last-name" placeholder=" " autocomplete="off"/>
                    <label for="last-name">Enter Last Name</label>
                </div>
            </div>

            <!-- e-mail -->
            <div class="input_field fadeout toggle_field" name="e-mail_field">
                <div class="input">
                    <input type="text" id="e-mail" name="e-mail" placeholder=" " autocomplete="off"/>
                    <label for="e-mail">Enter your E-mail</label>
                </div>
            </div>
            
            <!-- password -->
            <div class="input_field fadeout" name="pass_field">  
                <!-- pass -->
                <div class="input">
                    <div style="height:0px">
                        <!-- url change when uploading -->
                        <img src="/botsapp/img/icons/form/eye.png" name="eye" height="20px" width="20px" onclick="toggle_pass_box(this)"> 
                    </div>
                    <input type="password" id="pass" name="pass" placeholder=" " autocomplete="off" />
                    <label for="pass">Password</label>
                </div>
            </div>
            
            <!-- con_pass -->
            <div class="input_field fadeout toggle_field" name="con_pass_field">  
                 <div class="input">
                    <div style="height:0px">
                        <!-- url change when uploading -->
                        <img src="/botsapp/img/icons/form/eye.png" name="eye" class="con_eye" height="20px" width="20px" onclick="toggle_pass_box(this)"> 
                    </div>
                    <input type="password" id="con_pass" name="con_pass" placeholder=" " autocomplete="off" />
                    <label for="con_pass">Confirm Password</label>
                </div>
            </div>
            

            <!-- avatar -->
            <div class="input_field fadeout toggle_field" name="avatar_field">
               <div class="input-img">
                    <input type="file" name="avatar" id="avatar" accept="image/jpeg , image/png , image/webp">
               </div>
            </div>
            
            <!-- buttons -->
            <div class="input_field fadeout" name="button_field">
                <div class="button submit fadeout">
                    <input type="submit" name="submit" value="Log-in" spellcheck="false"/>
                </div>
                <div class="button change fadeout">
                    <input type="button" name="change" value="Register" >        
                </div>
            </div>
            
        </form>
        
        <footer>
            <div>
            All right reserverd by <a href="/t&c/policy.php" class="link">BotsApp</a>.
            </div>
            <a href="help/user-help.php?log-in" class="link">Need help?</a>
        </footer>
        
    </div>
</body>
</html>