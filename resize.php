<?php

use Exceptions\ImageException;

require 'vendor/autoload.php';

$img = new Image();

try {
    $img->get('coronabg.jpg')
        ->resize(300, 300)
        ->withPreffix(time() . "_")
        ->save();
} catch (ImageException $e) {
    echo $e->getMessage() . " in file:" . " " . $e->getFile() . " line: " . $e->getLine();
}

echo $img->imageinfo('file_path');
