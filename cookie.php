<?php
// Setting a cookie
setcookie("username", "JohnDoe", time() + 3600, "/");

// Reading a cookie
if (isset($_COOKIE['username'])) {
    echo "Hello, " . $_COOKIE['username'];
} else {
    echo "Cookie is not set.";
}
?>
