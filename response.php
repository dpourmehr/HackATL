<?php


if (isset($_POST["userName"]) && isset($_POST["password"]) && !empty($_POST["userName"]) && !empty($_POST["password"])) {
    echo "Yes, user and pass is set";    
}


?>