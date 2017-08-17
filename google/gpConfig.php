<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '794247244933-lnucp7ea95p4u4rluueo1ubcflg8n6k9.apps.googleusercontent.com'; //Google client ID
$clientSecret = '934EbB9Yfxf5bZDpQR1MaYeD'; //Google client secret
$redirectURL = 'http://localhost/mickemlyn/sso/google'; //Callback URL
//http://localhost/mickemlyn/sso/landing
//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>