<?php
    include "config.php";
    $query = "UPDATE `templates` SET `Title` = '".$_POST['Title']."', `Text` = '".$_POST['Text']."', `PreviewText` = '".$_POST['PreviewText']."' WHERE ID = ".$_POST['ID'];
    $res=mysql_query($query);
    echo "1";
?>