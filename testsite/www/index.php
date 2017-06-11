<?php

    function getCountries($count)
      {
        $array = array();
        while (($row = $count->fetch_assoc()) !=false)
        {
           $array[] = $row['name'];
        }
        //print_r ($array);
        require('main.php');
      }

    $mysql = new mysqli ("localhost","root","","regbd");
    $mysql->query ("SET NAMES 'utf-8'");

    $count = $mysql ->query ("SELECT * 
    FROM  `countries` ");
    getCountries ($count);

    $mysql->close ();

?>
