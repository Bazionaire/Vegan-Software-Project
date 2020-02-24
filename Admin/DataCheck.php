<?php
function checkUserData($userName, $password) {
    $feedback = null;
    if (!isSetandNotEmpty($userName)) {
        $feedback .= 'Please enter a username<br />';
    }

    if (!isSetandNotEmpty($password)) {
        $feedback .= 'Please enter a password<br />';
    }
    return $feedback;
}
function isSetandNotEmpty($value) {
    $valid = true;
    if (isset($value))
    {
        if ($value == '') {
            $valid = false;
        }
    } else {
        $valid = false;
    }
    return $valid;
}
