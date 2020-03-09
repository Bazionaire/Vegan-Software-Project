<?php

createAdminsTableIfNeeded($db);

$result = findUser($db, 'admin');
if ($result['username'] == null) {
    insertUser($db,'admin', 'password');
}
