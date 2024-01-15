<?php

spl_autoload_register(function ($class_name) {
    $model_path = $_SERVER['DOCUMENT_ROOT'] . '/model/' . $class_name . '.php';
    $controller_path = $_SERVER['DOCUMENT_ROOT'] . '/controller/' . $class_name . '.php';

    if (file_exists($model_path)) {
        require_once $model_path;
    } elseif (file_exists($controller_path)) {
        require_once $controller_path;
    }
});

session_start();


function sessionRedirect()
{
    if (!isset($_SESSION['usuario'])) {
        header('Location: /view/register.php');
    }
}

function loginGoogle()
{
    $clientID = '7035720435-6m87hnnct781g4s6lg4qq0malhelhmud.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost:10000';

    // create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");
    $authUrl = $client->createAuthUrl();
    return ($client);
}
?>