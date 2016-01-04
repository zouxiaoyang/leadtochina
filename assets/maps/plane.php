<?php
$angle =-$_GET['rotate'];
$src='image/plane.png';
$dst = 'image/new';
// rotate($src, $dst, $angle);
header('content-type: image/jpeg');
$imagick = new Imagick();
$imagick->readImage($src);
$imagick->rotateImage('#FFFFFF', $angle);
print $imagick->getImage();
