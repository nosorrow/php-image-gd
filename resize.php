<?php

require 'vendor/autoload.php';

$img = new Image();

try {
    $img->get('coronabg.jpg')
        ->resize(300, 300)
        ->withPreffix(time() . "_")
        ->save();
} catch (\Exceptions\ImageException $e) {
    echo $e->getMessage() . " in file:" . " " . $e->getFile() . " line: " . $e->getLine();
}
