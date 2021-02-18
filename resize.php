<?php

require 'vendor/autoload.php';

$img = new Image();

$img->get('coronabg6.jpg')
    ->resize(300,300)
    ->withPreffix(time() . "_")
    ->save();
