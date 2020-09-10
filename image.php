<?php
$image = imagecreatetruecolor(400, 200);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image,0,0,0);

imagefill($image, 0, 0, $black);
header("content_type: image/png");
imagepng($image);
imagedestroy($image);

?>