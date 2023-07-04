<?php

if (strlen($_GET['username']) > 3) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
}


var_dump(!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL));
