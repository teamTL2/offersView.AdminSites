<!DOCTYPE html>
<html>
<head>
    <title>Offers View</title>
    <link rel='stylesheet' type='text/css' href='css/signup.css'>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='js/bootstrap.js'>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'>
</head>
<body class='background'>
    <div id="wrapper">
        <div id="headerWrapper">
            <div id="logoWrapper" >
                <i class="fa fa-globe fa-4x"></i>
            </div>
            <div id="headerTextWrapper">
                <h1 id="title">Offers View</h1>
                <p id="headerText">Sign UP!</p>
            </div>
        </div>
        <div class="clear_float"></div>
        <div class="line-separator"></div>
        <div id="mainWrapper">
            <div id="formDataWrapper" class="row">
                <form action="php/RegisterClass.php" method="post" id="form">
                    <div id="dataWrapper" class="col-lg-6 ">
                        <div class="pos">
                            <input type="text" name="ShopName" placeholder="Shop Name" class="editStyle">
                        </div>
                        <div class="pos">
                            <input type="text" name="Street" placeholder="Street" class="editStyle">
                        </div>
                        <div class="pos">
                            <input type="password" name="Password" placeholder="Password" class="editStyle">
                        </div>
                        <div class="pos">
                            <input type="password" name="reEnterPassword" placeholder="Re-enter Password" class="editStyle">
                        </div>
                        <div class="pos">
                            <input type="email" name="Email" placeholder="E-Mail" class="editStyle">
                        </div>
                        <div class="pos">
                            <input type="text" name="Phone" placeholder="Phone Number" class="editStyle">
                        </div>
                        <div class="pos">
                            <input type="submit" value="Sign Up" class="btnStyle" id="btnSignUp">
                            <input type="button" value="Exit" onclick="window.location = 'index.php'" class="btnStyle">
                        </div>
                    </div>
                    <div id="textAreaWrapper col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <label>Find your shop location here:</label>
                        </div>
                        <div>
                            <textarea name="map" form="form" id="textArea">Here is the map for your shop location selection...</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clear_float"></div>
        <div class="line-separator"></div>
        <div id="footer" class="row">
            <div class="posAnchor col-lg-4">
                <a href="register.php" class="styleFooterAnchor">Sign Up</a>
            </div>
            <div class="posAnchor col-lg-4">
                <a href="about.php" class="styleFooterAnchor">About Us</a>
            </div>
            <div class="posAnchor col-lg-4 col-xs-4">
                <i class="style_BottomIcon fa fa-facebook-square fa-lg"><a href="#" class="styleFooterAnchor">Facebook</a></i>
            </div>
            <div class="posAnchor col-lg-12 col-lg-offset-4 col-xs-4">
                <i class="style_BottomIcon fa fa-linkedin-square fa-lg"><a href="#" class="styleFooterAnchor">Linkedin</a></i>
            </div>
            <div class="posAnchor col-lg-12 col-lg-offset-4 col-xs-4">
                <i class="style_BottomIcon fa fa-twitter-square fa-lg"><a href="#" class="styleFooterAnchor">Twitter</a></i>
            </div>
        </div>
    </div>
</body>
</html>






















