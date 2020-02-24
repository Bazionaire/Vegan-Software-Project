<?php

createAdminsTableIfNeeded($db);

$result = findUser($db, $username);
if ($result['username'] == null) {
    insertUser($db, 1, 'admin', 'password');
}
