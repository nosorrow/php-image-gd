<?php

namespace Executions;


class Pixelate extends AbstractExecutions
{

    public function execute(\Image $image)
    {
        $count = count($this->arguments);
        var_dump('Count: ',$count);
        if ($count > 1 || $count == 0) {
            throw new \Exception("Too many or Not arguments in " . get_class());
        }
        $size = $this->arguments[0];

        imagefilter($image->src_image, IMG_FILTER_PIXELATE, $size, true);

        return $image->src_image;
    }
}
