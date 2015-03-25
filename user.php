<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="user.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <title>User Profile</title>

        <script type="text/javascript">
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip({
                    placement: 'bottom'
                });
            });
        </script>

    </head>   

    <body>

        <div id="header">
            <div id="header_content">

                <!--                <button type="button" class="btn btn-default" id="hamburger">
                                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                </button>-->
                
                <span class="glyphicon glyphicon-tasks  gi-10x" aria-hidden="true" data-toggle="tooltip" data-original-title="Questions"></span>
                

                <font class="bold_text" id="ask">ASK</font> 
                <img src="images/images.png" id="logo" alt="fedora" height="30" width="30">
            </div>
        </div>


        <nav class="navbar navbar-default" id="search_nav_bar">
            <form id="form_search">
                <div>
                    <table>
                        <tr>
                            <td width="74%">
                                <input type="text" id = "search_text" placeholder="Search or ask a question">
                            </td>
                            <td width="26%">
                                <button type="submit" class="btn btn-default" id = "ask_btn">ASK</button>
                            </td>
                        </tr>
                    </table>

                </div>

            </form>
        </nav>   

        <div id="content_header">
            <div id="content">
                
            </div>
        </div>
        
        <div id="username_panel">
        <font class="bold_text" id="username">anuradhaw's profile - overview</font>
        </div>
        
        <div id="profile">
            <div class="profile_pane">
                <div id="profile_image">
                    <img id = "profile_photo" src="images/square_image.jpg" alt="profile" height="150" width="150">
                    <br>
                    <div  align="center" id="image_data">
                        <a href="#"><font class="small_bold_text" id="change_image">Change Picture</font></a><br>
                        <font class="statistics">3</font><br>
                        <font class="small_bold_text">karma</font>
                    </div>
                </div>
                <div id="profile_data">
                    <font class="bold_text">Registered User</font><br>
                    <font class="small_text">member since</font>
                    <br>
                    <font class="small_bold_text">6 hours ago</font>
                    <br>
                    <font class="small_text">last seen</font>
                    <br>
                    <font class="small_bold_text">8 mins ago</font>
                    <br>
                    <font class="small_text">Auto-tweeting is off</font>
                    <br>
                    <button type="submit" class="btn btn-default" id = "tweet">Start Tweeting</button>
                    <br>
                    <div>
                        <table>
                            <tr>
                                <td>
                                    <font class="small_text">Today's unused votes</font>&nbsp;&nbsp;
                                </td><td>
                                    <font class="statistics">30</font><br>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="statistics_panel" align="center" >
            
            <table>
                <tr>
                    <td align="center" class="stats">
                        <font class="statistics_2">2</font>
                    </td>
                    <td align="center" class="stats">
                        <font class="statistics_2">3</font>
                    </td>
                    <td align="center" class="stats">
                        <font class="statistics_2">4</font>
                    </td>
                    <td align="center" class="stats">
                        <font class="statistics_2">9</font>
                    </td>
                    <td align="center" class="stats">
                        <font class="statistics_2">8</font>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-original-title="Questions"></span>
                    </td>
                    <td align="center">
                        <span class="glyphicon glyphicon-ok-sign" aria-hidden="true" data-toggle="tooltip" data-original-title="Answers"></span>
                    </td>
                    <td align="center">
                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" data-toggle="tooltip" data-original-title="Votes"></span>
                    </td>
                    <td align="center">
                        <span class="glyphicon glyphicon-tags" aria-hidden="true" data-toggle="tooltip" data-original-title="Tags"></span>
                    </td>
                    <td align="center">
                        <span class="glyphicon glyphicon-bookmark" aria-hidden="true" data-toggle="tooltip" data-original-title="Badges"></span>
                    </td>
                </tr>
            </table>
            
        </div>

    </body>

</html>

