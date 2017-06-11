<?php

        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);
        $repeatpassword = htmlspecialchars($_POST['repeatpassword']);
        $email = htmlspecialchars($_POST['email']);

    function getUsersLogin ($user,$login, $password)
      {
        $arraylogin = array();
        $arraypassword = array();
        $arrayname = array();
        while (($row = $user->fetch_assoc()) !=false)
        {
           $arraylogin[] = $row['login'];
           $arraypassword[] = $row['password'];
           $arrayname[] = $row['realname'];
        }
        
        //print_r ($arraylogin)."<br />";
        //echo md5($password);
        for ($i=0; $i<count($arraylogin); $i++)
        {
            //echo $login."<br />";
            //echo $arraylogin[$i]."<br />";
        if (($login == $arraylogin[$i]) || (".MD5($password)" == $arraypassword[$i]))
            {
                
            //echo $login."<br />";
            //echo $password."<br />";
            echo "My congratulations, ".$arrayname[$i]."! It's your page.<br />";
            echo "Your login: ".$login."<br />";
            echo "<a href='/'>Log out</a>";
            }
        }
        
      }

function getUsersEmail ($user, $email, $password, $repeatpassword)
      {
        $arraypassword = array();
        $arrayemail = array();
        $arrayname = array();
    
        while (($row = $user->fetch_assoc()) !=false)
        {
           $arraypassword[] = $row['password'];
           $arrayemail[] = $row['email'];
           $arrayname[] = $row['realname'];
        }
    
        for ($i=0; $i<count($arrayemail); $i++)
        {
            //echo $login."<br />";
            //echo $arraylogin[$i]."<br />";
        if (($email == $arrayemail[$i]) || (".MD5($password)" == $arraypassword[$i]) || (".MD5($repeatpassword)" == $arraypassword[$i]) )
            {
                
            echo "My congratulations, ".$arrayname[$i]."! It's your page.<br />";
            echo "Your email: ".$email."<br />";
            echo "<a href='/'>Log out</a>";
            //echo $password."<br />";
            //echo $arrayname[$i]."<br />";
            }
        }
        
      }


        //echo $login."<br />";
        //echo $password;


        $mysql = new mysqli ("localhost","root","","regbd");
        $mysql->query ("SET NAMES 'utf-8'");

        $user = $mysql ->query ("SELECT * 
        FROM  `users` ");

        if (isset($_POST['signlogin']))
            getUsersLogin ($user, $login, $password);


        if (isset($_POST['signemail']))
            getUsersEmail ($user, $email, $password, $repeatpassword);

        $mysql->close ();

    //if (isset($_POST['signlogin']))   

?>
<!DOCTYPE html>  
<html>
<head>
<title>Sign in Form</title>
</head>
<body>
<form name="signinForm" action="" method="post"> 
       <Label>login: </Label> <br />
        <input type="text" name="login" value="<? echo $login?>"> <br />
        
       <Label>password: </Label> <br />
        <input type="password" name="password"> <br />
        <input type="submit" name="signlogin" value="SIGN IN" />
</form>
<hr>
<hr>
<form name="signinForm" action="" method="post"> 
       <Label>email: </Label> <br />
        <input type="text" name="email" value="<?php echo $email?>"><br />
        
       <Label>password: </Label> <br />
        <input type="password" name="password"> <br />
       <Label>repeat password: </Label> <br />
        <input type="password" name="repeatpassword"> <br />
        <input type="submit" name="signemail" value="SIGN IN" />
</form>

</body>
</html>