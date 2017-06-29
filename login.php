<?php
    include "config.php";
    $query = "SELECT * FROM `accounts` WHERE `Email` = '".$_POST['Email']."' AND `Password` = '".$_POST['Password']."'";
    $res=mysql_query($query);
    if(mysql_num_rows($res) > 0)
    {
        echo "1";
        $_SESSION['login'] = 1;
    }
    else echo "0";
?>