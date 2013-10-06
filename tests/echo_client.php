<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 30-9-13
 * Time: 21:05
 */

require_once(__DIR__."/../SplClassLoader.php");

$loader = new SplClassLoader("Devristo\\Phpws", __DIR__."/../src");
$loader->register();

$client = new \Devristo\Phpws\Client\WebSocket("ws://echo.websocket.org/?encoding=text");
$client->open();

$client->send("Hello world");
$msg = $client->readMessage();


echo $msg->getData();

$client->close();