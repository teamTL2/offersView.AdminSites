<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel='stylesheet' type='text/css' href='css/stylelogin.css' />
    <title> offers</title>
</head>
<body >
<div class='header' >
    <h1>wellcome<br> to offers page</h1>
</div>
<div id='center_box'  >
    <div id='image'>
    </div>
    <div id="log_in">
        <form action="php/LoginClass.php" method="post" id="form-signin">
            <fieldset>
                <input  name="ShopName" placeholder="Shop Name" id="username" type="text"><br>
                <input  name="Password" placeholder="Password" id="password" type="password">
                <br><br>
                <input type="submit" name="login"  value="Login" class="styleBtnIndex">
                <input type="button"  value="SignUp" class="styleBtnIndex" onclick="window.location.href='register.php'">
            </fieldset>
        </form>
    </div>
    <div id="radio">
        <input type='checkbox' checked='checked' />Remeber the password <br />
    </div>
</div>
<div class='footer'>
    <p><b> Thank you for your choise!!!</b></p>
</div>
</body>
</html>








































































