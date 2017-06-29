<?php
    include "config.php";
    $query = "INSERT INTO `templates` (`Title`, `Text`, `PreviewText`, `Date`) VALUES('".$_POST['Title']."', '".$_POST['Text']."', '".$_POST['PreviewText']."', '".date("y-m-d")."')";
    $res=mysql_query($query);
    echo "1";
?>