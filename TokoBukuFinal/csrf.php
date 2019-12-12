<?php

function random_string($length = 64) {
    $c = '1234567890qwertyuiopasdfghjklzxcvbnm';
    $cLen = strlen($c);

    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $idx = random_int(0, $cLen - 1);

        $result .= $c[$idx];
    }

    return $result;
}

if ( isset( $_SESSION['_csrf'] ) ) {
    $csrfToken = $_SESSION['_csrf'];
} else {
    $csrfToken = random_string();

    $_SESSION['_csrf'] = $csrfToken;
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    if ( ! isset($_POST['_csrf']) ) {
        exit('Bad Request');
    }

    $givenCsrfToken = $_POST['_csrf'];
    
    if ($givenCsrfToken !== $csrfToken) {
        exit('Bad Request');
    }
}
