<?php

namespace app\services;

use app\models\User;
use Google\Client;
use Google\Service\Oauth2;

class GoogleAuth {
    public static $google_login_url;

    public static function run() {
        $client = new Client();
        $client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
        $client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
        $client->setApplicationName('Duottone Application');
        $client->setRedirectUri(siteUrl() . 'user/login');
        $client->addScope('https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email');

        self::$google_login_url = $client->createAuthUrl();

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

            if (!isset($token['error'])) {
                $oAuth = new Oauth2($client);
                $userData = $oAuth->userinfo_v2_me->get();

                $data = [
                    'email' => $userData['email'],
                    'avatar' => $userData['picture'],
                    'firstName' => $userData['givenName'],
                    'lastName' => $userData['familyName'],
                ];

                $user_model = new User();
                $user_model->saveGoogleUser($data);
                $_SESSION['success'] = "You is loginned!";
            } else {
                $_SESSION['errors'] = "Some trouble with Google Authentication";
            }

            redirect('/user/login');
        }
    }
}