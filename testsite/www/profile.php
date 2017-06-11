
   <?php


        if (isset($_POST['flag']))
        {
                $email = htmlspecialchars($_POST['email']);
                $login = htmlspecialchars($_POST['login']);
                $realname = htmlspecialchars($_POST['name']);
                $birthdate = htmlspecialchars($_POST['birthdate']);
                $country = htmlspecialchars($_POST['menu']);
                $password = htmlspecialchars($_POST['password']);
            
        require('main.php');
            
            $error_email = "";
            $error_login = "";
            $error_realname = "";
            $error_birthdate = "";
            $error_password = "";
            $error = false;
            
            if ($email == "" || !preg_match("/@/",$email)) // || !preg_match("//",$email)
            {
                $error_email = "For registration, enter e-mail correctly";
                echo $error_email."<br />";
                $error = true;
            }
            if ($login == "")
            {
                $error_login = "For registration, enter login";
                echo $error_login."<br />";
                $error = true;
                //header ("Location: http://google.com");
            }
            if ($realname == "") // || !preg_match("/1234567890/",$realname)
            {
                $error_realname = "For registration, enter name correctly";
                echo $error_realname."<br />";
                $error = true;
                //header ("Location: http://google.com");
            }
            if ($birthdate == "")
            {
                $error_birthdate = "For registration, enter birthdate";
                echo $error_birthdate."<br />";
                $error = true;
                //header ("Location: http://google.com");
            }
            if (strlen($password)<7)
            {
                $error_password = "For registration, enter password correctly(more than 6 symbols)";
                echo $error_password."<br />";
                $error = true;
                //header ("Location: http://google.com");
            }
        }
        else 
        {
            $error_flag = "For registration, you must agree with conditionals!";
                echo $error_flag."<br />";
            $error = true;
        }

        if (!$error)
        {
            
                $mysql = new mysqli ("localhost","root","","regbd");
                $mysql->query ("SET NAMES 'utf-8'");

                $mysql ->query ("INSERT INTO  `regbd`.`users` (
                    `id` ,
                    `email` ,
                    `login` ,
                    `realname` ,
                    `birthdate` ,
                    `country` ,
                    `password`
                    )
                    VALUES (
                    NULL ,  '$email',  '$login',  '$realname',  '$birthdate',  '$country', MD5(  '$password' )
                    )"); //$email,$login,$realname,$birthdate,$country,$password
                        
                $mysql->close ();
        echo "Welcome ".$realname."!";
        echo "<a href='/'>Log out</a>";
        echo "<br/>";
        echo "your email: ".$email."<br/>";
        echo "your login: ".$login."<br/>";
        }
        else 
        {   
            echo "<a href='/'>Back</a>";
            
        }

        //print_r ($_POST);
    ?>