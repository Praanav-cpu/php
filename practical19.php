<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

function get_browser_type($user_agent) {
    $browser = "Unknown";

    if (strpos($user_agent, 'Firefox') !== false) {
        $browser = 'Mozilla Firefox';
    } elseif (strpos($user_agent, 'Chrome') !== false) {
        $browser = 'Google Chrome';
    } elseif (strpos($user_agent, 'Safari') !== false) {
        $browser = 'Apple Safari';
    } elseif (strpos($user_agent, 'Opera') !== false || strpos($user_agent, 'OPR') !== false) {
        $browser = 'Opera';
    } elseif (strpos($user_agent, 'Edge') !== false) {
        $browser = 'Microsoft Edge';
    } elseif (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident/') !== false) {
        $browser = 'Internet Explorer';
    }

    return $browser;
}

$browser_type = get_browser_type($user_agent);
echo "Your browser type is: $browser_type";

?>
