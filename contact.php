<!DOCTYPE html>
<?php
    include_once('php/ProfileData.php');
?>
<html>
<head>
    <title>Offers View</title>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="background">
    <div id="wrapper">
        <div id="navWrapper" class="row">
            <a href="profile.php" id="logoWrapper" class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img src="assets/logo1.png" alt="this is a logo" id="logoImg" class="img-responsive"></a>
            <div id="listWrapper" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul id="navList">
                    <li><a href="profile.php"><p>My Profile</p></a></li>
                    <li><a href="contact.php"><p>Contact</p></a></li>
                    <li><a href="help.php"><p>Help</p></a></li>
                    <li><a href="about.php"><p>About Us</p></a></li>
                </ul>
                <div class="clear_float"></div>
            </div>
        </div>
        <div class="line-separator"></div>
        <div id="mainWrapper">
            <div id="contactFormWrapper">
                <form action="php/ContactClass.php" method="post" id="profileForm">
                    <div class="pos">
                        <input type="text" name="ShopName" class="contactEditStyle" value="<?php echo $_SESSION['ShopName']; ?>">
                    </div>
                    <div class="pos">
                        <input type="email" name="fromEmail" class="contactEditStyle" value="<?php echo $_SESSION['Email']; ?>">
                    </div>
                    <div class="pos">
                        <textarea name="messageArea" placeholder="Write your message here:" id="contactTextAreaStyle" rows="12" cols="12"></textarea>
                    </div>
                    <div class="pos">
                        <input type="submit" value="Send" class="btnStyle" id="contactBtn">
                    </div>
                </form>
            </div>
        </div>
        <div class="line-separator"></div>
        <div id="footer" class="row">
            <div class="posAnchor col-lg-4">
                <a href="help.php" class="styleFooterAnchor">Help</a>
            </div>
            <div class="posAnchor col-lg-4">
                <a href="#" class="styleFooterAnchor">About Us</a>
            </div>
            <div class="posAnchor col-lg-4 col-xs-4">
                <i class="style_BottomIcon fa fa-facebook-square fa-lg"><a href="#" class="styleFooterAnchor">Facebook</a></i>
            </div>
            <div class="posAnchor col-lg-12 col-lg-offset-4 col-xs-4">
                <i class="style_BottomIcon fa fa-linkedin-square fa-lg"><a href="#" class="styleFooterAnchor">Linkedin</a></i>
            </div>
            <div class="posAnchor col-lg-12 col-lg-offset-4 col-xs-4">                              <!--To col-lg-offset-4 dimiourgei to de3io extra perithorio stin selida!-->
                <i class="style_BottomIcon fa fa-twitter-square fa-lg"><a href="#" class="styleFooterAnchor">Twitter</a></i>
            </div>
        </div>
    </div>
</body>
</html>