<?php
include 'qrcode.php';

$generator = new QRCode($data, $options);

/* Output directly to standard output. */
$generator->output_image();

/* Create bitmap image. */
$image = $generator->render_image();
imagepng($image);
imagedestroy($image);
?>