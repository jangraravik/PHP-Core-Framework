<?php
require_once 'app_config.php';
$siteLog->write("Processing... image magician library");

$magicImg = new imageLib('test/Koala.jpg');
$magicImg->resizeImage(200,200);
$magicImg->roundCorners(4, 'transparent');
$magicImg->saveImage('test/Koala_new.png',50);