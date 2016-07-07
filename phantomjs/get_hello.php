<?php
require './vendor/autoload.php';

use JonnyW\PhantomJs\Client;

$client = Client::getInstance();

$request  = $client->getMessageFactory()->createRequest();
$response = $client->getMessageFactory()->createResponse();

$width  = 800;
$height = 600;
$top    = 0;
$left   = 0;

$url = 'http://www.yahoo.co.jp/';
$request = $client->getMessageFactory()->createCaptureRequest('http://www.yahoo.co.jp/', 'GET');
$request->setOutputFile('./phantomjs/yahoo.jpg');
//$request->setViewportSize($width, $height);
//$request->setCaptureDimensions($width, $height, $top, $left);

$client->send($request, $response);
