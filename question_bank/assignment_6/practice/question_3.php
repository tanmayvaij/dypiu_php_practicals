<!-- 3. Write a script to keep track of a number of times the web page has been accessed using the
session. -->

<?php

    session_start();

    if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 1;
    else $_SESSION['counter']++;

    echo "Page Views: ".$_SESSION['counter'];

?>
