<?php

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $memberType = $_POST['memberType'];
    $subscription = $_POST['subscription'];
    $comment = $_POST['comment'];

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Ethereal</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    </head>

    <body>

        <div class="container">

            <header>

                <img src="dress.jpg" width="164px" height="164px" class="dressPicture">
                <img src="header.jpg" width="400px" height="164px" class="headerPicture">
                <img src="woman.jpg" width="164px" height="164px" class="womanPicture">
                <img src="moon.jpg" width="463px" height="164px" class="moonPicture">

            </header>

            <nav>

                <ul class="navbarMenu">

                    <li class="navbar"><a href="#" class="navbarLink">Home</a></li>
                    <li class="navbar"><a href="#" class="navbarLink">About</a></li>
                    <li class="navbar"><a href="#" class="navbarLink">Contacts</a></li>
                    <li class="navbar"><a href="#" class="navbarLink">Support</a></li>
                    <li class="navbar"><a href="#" class="navbarLink">More</a></li>

                </ul>

            </nav>

            <main>

                <div class="rightContent">

                    <h1>Charming</h1>

                    <p>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br> 
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br>
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <br> 
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est <br>
                        laborum.

                    </p>

                    <h1>Graceful</h1>

                    <p>

                        <img src="bathtub.jpg" width="164px" height="164px" class="bathtubPicture">

                        Lorem ipsum dolor sit amet, consectetur <br> adipiscing
                        elit, sed do eiusmod tempor incididunt <br> ut labore et dolore magna aliqua.
                        Enim sit amet <br> venenatis urna cursus eget nunc scelerisque <br> viverra.
                        Malesuada bibendum arcu vitae <br>
                        elementum curabitur vitae nunc sed. Volutpat <br>
                        commodo sed egestas egestas fringilla phasellus. <br> Vivamus at augue eget
                        arcu dictum varius duis at. <br>
                        Est velit egestas dui id ornare arcu. Semper
                        risus <br> in hendrerit gravida rutrum quisque non tellus. Velit ut tortor pretium
                        viverra <br> suspendisse. Morbi enim nunc faucibus a pellentesque
                        sit amet porttitor. <br> Tempor commodo ullamcorper a lacus vestibulum sed
                        arcu.

                    </p>

                    <ol class="listOl">

                        <li class="contentOl">Talented</li>
                        <li class="contentOl">Brilliant</li>
                        <li class="contentOl">Incredible</li>
                        <li class="contentOl">Amazing</li>
                        <li class="contentOl">Show stopping</li>

                    </ol>

                    <ul class="listUl">

                        <li class="contentUl">Spectacular</li>
                        <li class="contentUl">Never the same</li>
                        <li class="contentUl">Totally unique</li>
                        <li class="contentUl">Completely not ever been done before</li>
                        <li class="contentUl">Unafraid to reference or not reference</li>

                    </ul>

                    <h1>Pleasant</h1>

                    <blockquote>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua.

                    </blockquote>

                    <hr>

                    <h1>Become our member</h1>

                    <form action="finalMemberForm.php" method="POST">

                        <label for="fullname">Full Name</label><br>
                        <?php echo "<div class='fullnamePHP'>$fullname</div>"; ?><br>
                        <label for="email">Email</label><br>
                        <?php echo "<div class='emailPHP'>$email</div>"; ?><br>

                        <label for="memberType">Member Priviledge</label><br>
                        <?php echo "<div class='memberTypePHP'>$memberType</div>";?><br>

                        <label for="subscription" class="optionPrice">Subscription</label><br>
                        <?php

                        if(isset($_POST['submit'])) {
                            $subscription = $_POST['subscription'];
                            echo "<div class='subscriptionPHP'>$subscription</div>";
                        }
                        
                        ?><br>

                        <label for="comment">Helpful Comment</label><br>
                        <?php echo "<div class='commentPHP'>$comment</div>"; ?><br>

                    </form>

                </div>

                <aside>

                    <h1 class="asideH1">Fair</h1>

                    <p class="fairP">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Netus et malesuada fames ac turpis 
                        egestas sed. Lobortis elementum nibh tellus molestie nunc non. Bibendum enim facilisis 
                        gravida neque convallis. Elit eget gravida cum sociis natoque penatibus. 
                        Id volutpat lacus laoreet non curabitur gravida arcu ac.
                    </p>

                    <h1 class="asideH1">Sidebar Menu</h1>

                    <ul class="sidebarList">

                        <li class="sidebar"><a href="#" class="sidebarLink">Announcements</a></li>
                        <hr class="sidebarHr">
                        <li class="sidebar"><a href="#" class="sidebarLink">Members</a></li>
                        <hr class="sidebarHr">
                        <li class="sidebar"><a href="#" class="sidebarLink">Trivias</a></li>
                        
                    </ul>

                    <h1 class="asideH1">Sponsors</h1>

                    <ul class="sponsorsList">

                        <li class="sponsors"><a href="instagram.com/tkqmflsk" class="sponsorsLink">Instogram</a></li>
                        <hr class="sponsorsHr">
                        <li class="sponsors"><a href="twitter.com/smolbeana" class="sponsorsLink">Twittie</a></li>
                        <hr class="sponsorsHr">
                        <li class="sponsors"><a href="https://www.youtube.com/channel/UCACaDTuKmmcleRiyPQK8Gkg" 
                            class="sponsorsLink">ITube</a></li>
                        
                    </ul>

                    <h1 class="asideH1">Wise Words</h1>

                    <p class="wiseP">
                        "Make yourself proud even if it's only a little thing."
                    </p>

                    <p class="myQuote">
                        - Sabrina Misyell Aaliyah
                    </p>

                    <h1 class="asideH1">Support Styleshout</h1>

                    <p class="supportP">
                        It's not like I'm already a professional Front-End Developer but if you appreciate
                        this website of mine, donate for improvement, collaboration, you can contact me 
                        <a href="misyellsabrina@gmail.com" class="emailLink">here.</a> Thank you for 
                        visiting. I hope you have a beautiful day.
                    </p>

                    <h1 class="asideH1">Search Box</h1>

                    <input type="search" id="searchBox" placeholder="Recent update">
                    <input type="submit" value="Search" class="searchButton">

                </aside>

            </main>

        </div>

        <footer>

            <p>&copy; 2021 SMKN 13 Bandung | XI RPL 1 | Created by Sabrina Misyell Aaliyah | 101917403</p>

        </footer>

    </body>

</html>

<script type="text/javascript" src="alert.js"></script>