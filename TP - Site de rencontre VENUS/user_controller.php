<?php

if (isset($_POST["deleteCookies"])) {
    setcookie("lastname", "", time(), null, null, false, true);
    setcookie("firstname", "", time(), null, null, false, true);
    setcookie("age", "", time(), null, null, false, true);
    setcookie("gender", "", time(), null, null, false, true);
    setcookie("postalCode", "", time(), null, null, false, true);
    setcookie("email", "", time(), null, null, false, true);
    setcookie("type", "", time(), null, null, false, true);


    header("Location: index.php");
} 

?>
