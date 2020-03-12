<?php

createAdminsTableIfNeeded($db);

$result = findUser($db, 'admin@lex-enterprises.com');
if ($result['email'] == null) {
    insertUser($db,'admin', 'theBoss', 'admin@lex-enterprises.com', 'password');
}
