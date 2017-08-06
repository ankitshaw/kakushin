<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "128821827-09n4WUJbETIsqLTj9XTw9e7TZZiuAkrAr4ZPtRRY",
    'oauth_access_token_secret' => "UO1PBIi5JnNV5wt5XFa70I6aHDVjATGYWNl4cPaCbNHRw",
    'consumer_key' => "ABRg3LljqERNmKNLAYy3aO1Gc",
    'consumer_secret' => "QL9qujtWjFbac07xmgMxYnJYFKOQmfJ4PO1lXT8PWx6Zb37FQU"
    );

$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';
$postfields = array(
    'status' => 'Test2 Twitter Api...'
);
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
            ->performRequest();
?>
