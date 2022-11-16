<?php 

    // Starting a session
    session_start();

    // Setting session data
    $_SESSION["session_name"] = "alpha321";

    // Getting session data
    echo $_SESSION["session_name"]."\n";

    // Destroying session
    session_destroy();

?>
