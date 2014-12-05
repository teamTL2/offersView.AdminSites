?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 3/12/2014
 * Time: 11:15 πμ
 */
session_start();
?>
<!DOCTYPE html>
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
        <div id="profileFormWrapper" class="row">
            <form action="profile.php" method="post" enctype="text/plain" id="profileForm">
                <div id="profileDataWrapper" class="col-lg-4 col-md-6">
                    <div>
                        <label>Shop Name:</label>
                    </div>
                    <div>
                        <input type="text" name="ShopName" class="profileEditStyle"  value="<?php echo $_SESSION['ShopName']; ?>">
                    </div>
                    <div>
                        <label>Street</label>
                    </div>
                    <div>
                        <input type="text" name="Street" class="profileEditStyle" value="<?php echo $_SESSION['Street']; ?>">
                    </div>
                    <div>
                        <label>Password:</label>
                    </div>
                    <div>
                        <input type="text" name="Password" class="profileEditStyle" value="<?php echo $_SESSION['Password']; ?>">
                    </div>
                    <div>
                        <label>E-mail:</label>
                    </div>
                    <div>
                        <input type="email" name="Email" class="profileEditStyle" value="<?php echo $_SESSION['Email']; ?>">
                    </div>
                    <div>
                        <label>Phone Number:</label>
                    </div>
                    <div>
                        <input type="text" name="Phone" class="profileEditStyle" value="<?php echo $_SESSION['Phone']; ?>">
                    </div>
                    <div>
                        <label>Write New Offer:</label>
                    </div>
                    <div>
                        <input type="text" name="Offer" class="profileEditStyle" placeholder="<<New Offer>>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input type="submit" name="Update" value="Update" class="btnStyle">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input type="submit" name="Insert" value="Insert Offer" class="btnStyle">
                    </div>
                </div>
                <div id="textAreaWrapper" class="col-lg-4 col-md-6">
                    <div>
                        <label>Change your shop location here:</label>
                    </div>
                    <div>
                        <textarea name="map" form="profileForm" id="textArea">Here is the map for your shop location selection...</textarea>
                    </div>
                </div>
            </form>
            <div id="offersListWrapper" class="col-lg-4 col-md-4">
                <label>All your offers is here:</label>
                <ul id="offersList">
                    <li><input type="text" placeholder="Offer Example"></li>
                    <li><input type="text" placeholder="Offer Example"></li>
                    <li><input type="text" placeholder="Offer Example"></li>
                    <li><input type="text" placeholder="Offer Example"></li>
                </ul>
            </div>
        </div>
        <div class="clear_float"></div>
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