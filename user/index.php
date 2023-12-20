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
<body  onload="document.forms['form']['user'].focus()">
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
            <h1>Log-in</h1>
            <p>Enter Your username/e-mail and password</p>  
        </div>

        <form action="#" method="post" id="form" name="form">

            <!-- user -->
            <div class="input-field">
                <div class="input">
                    <input type="text" id="user" name="user" placeholder=" " autocomplete="off"/>
                    <label for="user">Enter Username / E-mail</label>
                </div>
            </div>
            
            <!-- Name -->
            <div class="input-field">
                <div class="input name">
                    <input type="text" id="first-name" name="first-name" placeholder=" " autocomplete="off"/>
                    <label for="first-name">Enter First Name</label>

                    <input type="text" id="last-name" name="last-name" placeholder=" " autocomplete="off"/>
                    <label for="last-name">Enter Last Name</label>
                </div>
            </div>
            
            <!-- password -->
            <div class="input-field">
                <img src="/botsapp/img/icons/form/eye.png" name="eye" class="eye" height="20px" width="20px"> 
                <div class="input">
                    <!-- url change when uploading -->
                    <input type="password" id="pass" name="pass" placeholder=" " autocomplete="off" />
                    <label for="pass">Password</label>
                </div>
            </div>
            
            <!-- bUTTONS -->
            <div class="input-field">
                <div class="submit">
                    <input type="submit" name="submit" value="Log-in" spellcheck="false" />
                </div>
                <div class="flip">
                    <input type="button" name="flip" value="Register">        
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