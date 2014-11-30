<?php

    $link=mysql_connect("server10.serversfree.com", "u519377779", "ulven1991247");
    if(!$link) {
        die("Could not connect to host");
    }
    mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");

?>