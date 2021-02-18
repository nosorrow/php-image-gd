<?php

namespace Executions;

use Exceptions\ImageException;

class Pixelate extends AbstractExecutions
{

    /**
     * @param \Image $image
     * @return mixed
     * @throws ImageException
     */
    public function execute(\Image $image)
    {
        $count = count($this->arguments);

        if ($count > 1 || $count == 0) {
            throw new ImageException("Too many or Not arguments in " . get_class());
        }
        $size = $this->arguments[0];

        imagefilter($image->src_image, IMG_FILTER_PIXELATE, $size, true);

        return $image->src_image;
    }
}
