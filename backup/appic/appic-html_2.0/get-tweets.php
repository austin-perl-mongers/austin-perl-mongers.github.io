<?php
session_start();
require_once('twitteroauth/twitteroauth.php'); //Path to twitteroauth library
 
$twitteruser = "@OliaGozha";
$notweets = 10;
$consumerkey = "ZoEvUl0uLkwNcAElAVbLVQ";
$consumersecret = "0OlE7qMwgd7NgdO3lxyYuz8BbaMIjGU7KT2YfMCZxw";
$accesstoken = "1154664626-z8q0HvszXk1BDaDZO6D0yvVq6BeLsIMaEA2GHpc";
$accesstokensecret = "yQvn60uP9KtNhrghpraeQTZtAthGM04QcecphOzKuk";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>