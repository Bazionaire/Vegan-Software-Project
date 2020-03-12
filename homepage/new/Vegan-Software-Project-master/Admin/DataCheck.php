<?php
function checkUserData($firstName, $lastName, $email, $password, $confirm) {
    $feedback = null;
    // Check for a first name
    if (!isSetandNotEmpty($firstName)) {
        $feedback .= 'Please enter a first name<br />';
    }
    // check for a last name
    if (!isSetandNotEmpty($lastName)) {
        $feedback .= 'Please enter a last name<br />';
    }
    // check email address
    if (!isSetandNotEmpty($email)) {
        $feedback .= 'Please enter an email address<br />';
    }
    // check password address
    if (!isSetandNotEmpty($password)) {
        $feedback .= 'Please enter a password<br />';
    }
    // check confirm password address
    if (!isSetandNotEmpty($confirm)) {
        $feedback .= 'Please confirm password<br />';
    }
    // Check password and confirm password are equal
    if ($password !== $confirm) {
        $feedback .= 'Passwords do not match<br />';
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
