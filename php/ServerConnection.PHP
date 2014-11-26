<?php

    $link=mysql_connect("server1.serversfree.com", "u992803791", "ulven1991247");
    if(!$link) {
    die("Could not connect to host");
    }
    mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");

?>