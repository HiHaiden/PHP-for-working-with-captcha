<?php

session_start();

$numOne = rand(1, 9);

$numTwo = rand(1, 9);

$numero = $numOne * $numTwo;

$display = $numOne . '*' . $numTwo . '=';

$_SESSION['check'] = $numero;

$img = imagecreate( 120, 60 );

$background = imagecolorallocate( $img, rand(0, 255), rand(0, 255), rand(0, 255) );

$text_colour = imagecolorallocate( $img, rand(0, 255), rand(0, 255), rand(0, 255) );

$text = $display;

$font = './verdana.ttf';

imagettftext($img, 24, rand(-20, 20), 10, 44, $text_colour, $font, $text);

header( 'Content-type: image/png' );

imagepng( $img );

imagecolordeallocate( $img, $text_color );
imagecolordeallocate( $img, $background );
imagedestroy( $img ); 
?> 