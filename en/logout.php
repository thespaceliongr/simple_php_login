<!--
Simple php member (progress bar, rules, register, login, profile, edit, update, forgot, new password, total users,your ip,logout, sql).

 * @copyright 2007-2019 The Space Lion Gr Net
 * @see https://www.thespaceliongr.net/
 * @Author Stavros Vourliotis.

//-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <!-- logout  -->
      <!-- php script  -->

    <?php
$past = time() - 100;
//this makes the time in the past to destroy the cookie
setcookie("ID_my_site", "", $past);
setcookie("Key_my_site", "", $past);




 session_start();
 
 $_SESSION = array(); // destroy all $_SESSION data
 
$username = $_COOKIE['username'];

//this makes the time in the past to destroy the cookie
setcookie('username', $username, time()-3600);
unset($_COOKIE['username']);


// unset cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-3600);
        setcookie($name, '', time()-3600, '/');
		unset($name);
    }
}



if (isset($_COOKIE['username'])) {
    unset($_COOKIE['username']);
	setcookie('username', '', time()-3600);
    setcookie('username', '', time()-3600, '/'); // empty value and old timestamp
}

unset($_COOKIE['username']);
unset($_SESSION['username']);

session_destroy();

session_write_close();

//sleep for 3 seconds
sleep(3);

header("Location: login.php");


?> 
                    <!-- php script  -->
