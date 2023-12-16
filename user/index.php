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
<body>
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
                    <input type="text" id="user" name="user" placeholder=" "/>
                    <label for="user">Enter Username / E-mail</label>
                </div>
            </div>
            
            <!-- password -->
            <div class="input-field">
                <div class="input">
                    <input type="password" id="pass" name="pass" placeholder=" "/>
                    <label for="pass">Password</label>
                </div>
            </div>
            
            <!-- submit -->
            <div class="input-field">
                <div class="submit">
                    <input type="submit" name="user" value="Log-in"/>
                </div>
            </div>
            
        </form>
        
        
    </div>
</body>
</html>