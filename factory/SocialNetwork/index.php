<?php
require_once __DIR__ . "/vendor/autoload.php";

use SocialNetwork\FacebookPoster;

$facebook = new FacebookPoster('444','parol');
$facebook->post('post hello world');