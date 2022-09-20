<?php
$arr_browsers = ["Chrome", "Safari", "Firefox"];
 
$agent = $_SERVER['HTTP_USER_AGENT'];
 
$user_browser = '';
foreach ($arr_browsers as $browser) {
    if (strpos($agent, $browser) !== false) {
        $user_browser = $browser;
        break;
    }   
}

if ($user_browser == "Safari") {
    echo '<body style="background-color:blue">';
    echo '<img src="logo/safari.png" width="100" height="100">';
} elseif ($user_browser == "Chrome") {
    echo '<body style="background-color:black">';
    echo '<img src="logo/chrome.png" width="100" height="100">';
} elseif ($user_browser == "Firefox") {
    echo '<body style="background-color:red">';
    echo '<img src="logo/firefox.png" width="100" height="100">';
} else {
    echo "Unknown";
}
