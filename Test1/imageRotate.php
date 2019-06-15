<?php 
$image = 'C:\xampp\htdocs\Test1\uploads\10.png'; 
    // Now that it's auto-rotated, make sure the EXIF data is correct in case the EXIF gets saved with the image! 
$image->setImageOrientation(imagick::ORIENTATION_TOPLEFT); 
autoRotateImage($image); 
// - Do other stuff to the image here - 
$image->writeImage('C:\xampp\htdocs\Test1\uploads\resultimage.png'); 
?>
<?php 
// Note: $image is an Imagick object, not a filename! See example use below. 
function autoRotateImage($image) { 
    $orientation = $image->getImageOrientation(); 

    switch($orientation) { 
        case imagick::ORIENTATION_BOTTOMRIGHT: 
            $image->rotateimage("#000", 180); // rotate 180 degrees 
        break; 

        case imagick::ORIENTATION_RIGHTTOP: 
            $image->rotateimage("#000", 90); // rotate 90 degrees CW 
        break; 

        case imagick::ORIENTATION_LEFTBOTTOM: 
            $image->rotateimage("#000", -90); // rotate 90 degrees CCW 
        break; 
    } 


} 
?> 

