
<!DOCTYPE html>  
<html>
<head>
<title>Registration Form</title>
</head>
<body>
   
    <form name="regForm" action="profile.php" method="post"> 
       <Label>email: </Label> <br />
        <input type="text"/ name="email" value="<?php echo $email?>"> 
        <span style="color:red"><? echo $_COOKIE["error_email"]?></span><br />
       <Label>login: </Label> <br />
        <input type="text"/ name="login" value="<? echo $login?>"> 
        <span style="color:red"><? echo $error_login?></span><br />
       <Label>name: </Label> <br />
        <input type="text"/ name="name" value="<? echo $realname?>"> 
        <span style="color:red"><? echo $error_realname?></span><br />
       <Label>birthdate: </Label> <br />
        <input type="text"/ name="birthdate" value="<? echo $birthdate?>"> 
        <span style="color:red"><? echo $error_birthdate?></span><br />
       <Label>country: </Label> <br />
        <select name="menu" size="1">
            
                <?php foreach ($array as $str) { ?>
                    <option><?php echo $str; ?></option>
                <?php } ?>
           
        </select><br />
        
       <Label>password: </Label> <br />
        <input type="password"/ name="password"> 
        <span style="color:red"><? echo $error_password?></span><br /><br />
        <input type="checkbox" name="flag" value="1417"> I agree with conditionals
        <span style="color:red"><? echo $error_flag?></span><br /><br />
        <input type="submit" name="reg" value="REGISTRATION" />
    </form>
    <form>
        <input type="button" value="SIGN IN" onClick='location.href="signin.php/"'>
    </form>
</body>
</html>