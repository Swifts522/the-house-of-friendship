<?php
    include "config.php";
    $query = "DELETE FROM `templates` WHERE ID = ".$_POST['ID'];
    $res=mysql_query($query);
    echo "1";
?>