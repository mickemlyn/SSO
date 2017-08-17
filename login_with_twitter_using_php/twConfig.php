<?php
if(!session_id()){
    session_start();
}

//Include Twitter client library 
include_once 'src/twitteroauth.php';

/*
 * Configuration and setup Twitter API
 */
$consumerKey = 'kOfKdckaFA50t2NpbsLiQSOyl';
$consumerSecret = 'tduzIrsQDcrZhltKiLUnPWuJHR6wdoxitGfgKX5X0dJxjQGQEo';
$redirectURL = 'http://localhost/mickemlyn/sso/login_with_twitter_using_php/';
//http://localhost/twitter_login_php/
//http://localhost/mickemlyn/sso/landing

?>