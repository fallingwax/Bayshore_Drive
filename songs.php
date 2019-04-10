<?php
require 'SpotifyWebAPI.php';
require 'Session.php';
require 'Request.php';

$session = new Session(
    '9c35d2349c2d461097e4f706500ca63d',
    '99bcf1bdea4446d4a4b418edd36b6a54',
    'http://localhost/callback/'
);

$api = new SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

    print_r($api->me());
} else {
    $options = [
        'scope' => [
            'user-read-email',
        ],
    ];

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
}

?>