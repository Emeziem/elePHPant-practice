<?php
session_start();

setcookie("username", "Messi", time() + 1 * 60 * 60);

// echo $_COOKIE["username"];
// setcookie("username", "", time() - 3600);

if (isset($_COOKIE["username"])) {
    # code...
    echo "Hi " .$_COOKIE["username"]. " ".session_id();
} else {
    # code...
    echo "Welcome Guest!";
}
?>