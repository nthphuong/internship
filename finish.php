<?php

if (isset($_GET)) {
    $uid = $_GET['uid'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $address = $_GET['address'];

    if ($_GET['confirm'] == 'Cancel') {
        header("Location: index.php?uid=$uid&name=$name&email=$email&address=$address&mode=canceled");
    } else {
        mail('dragonknight2211@gmail.com', 'information', "UID: $uid, Name: $name, Email: $email, address: $address");
        echo 'Submit Completed';
    }

}