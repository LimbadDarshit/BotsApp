<?php
    include "interface.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Group Chat</title>
    
    <link rel="stylesheet" href="css/group_chat.css" type="text/css"> 
</head>
<body>
    
    <!-- chat-box -->
    <div class="chat-box">
        <!-- chat-list -->
        <div class="inbox">

            <div class="page-name">
                <h2 id="cname"></h3>
            </div>
            
            <div class="hr"></div>
            
            <!-- search-box -->
            <div class="search">
                <input type="search" name="seach" placeholder="search" autocomplete="off">
            </div>

            <!-- use php to get list from db -->
            <table class="list"> 
                <tbody class="scroll">

                    <tr>
                        <td class="inbox-user">
                            <div class="img">
                                <img class="skeleton" src="img/default_dp.png">
                            </div>
                            <div class="details">
                                <h5 class="skeleton skeleton-text">Name</h5>
                                <p class="skeleton skeleton-text">last chat sdaaaaaaadddddddddddddddddddddddddaaaaaaaaaaaaa here,</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="inbox-user">
                            <div class="img">
                                <img class="skeleton" src="img/default_dp.png">
                            </div>
                            <div class="details">
                                <h5 class="skeleton skeleton-text">Name</h5>
                                <p class="skeleton skeleton-text">last chat sdaaaaaaaaaaaaaaaaaaaa here,</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="inbox-user">
                            <div class="img">
                                <img class="skeleton" src="img/default_dp.png">
                            </div>
                            <div class="details">
                                <h5 class="skeleton skeleton-text">Name</h5>
                                <p class="skeleton skeleton-text">last chat sdaaaaaaaaaaaaaaaaaaaa here,</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="inbox-user">
                            <div class="img">
                                <img class="skeleton" src="img/default_dp.png">
                            </div>
                            <div class="details">
                                <h5 class="skeleton skeleton-text">Name</h5>
                                <p class="skeleton skeleton-text">last chat sdaaaaaaaaaaaaaaaaaaaa here,</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="inbox-user">
                            <div class="img">
                                <img class="skeleton" src="img/default_dp.png">
                            </div>
                            <div class="details">
                                <h5 class="skeleton skeleton-text">Name</h5>
                                <p class="skeleton skeleton-text">last chat sdaaaaaaaaaaaaaaaaaaaa here,</p>
                            </div>
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