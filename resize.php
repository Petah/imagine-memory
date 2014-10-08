<?php
require_once __DIR__ . '/vendor/autoload.php';

ini_set('memory_limit', '256m');
//ini_set('memory_limit', '512m');

$size = new Imagine\Image\Box(800, 800);
//$mode = Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
//$mode = Imagine\Image\ImageInterface::THUMBNAIL_INSET;
$imagine = new Imagine\Gd\Imagine();
$imagine->open(__DIR__ . '/6x4-huge.jpg')
    //->thumbnail($size, $mode)
    ->thumbnail($size)
    ->save(__DIR__ . '/6x4-huge-resized.jpg');
