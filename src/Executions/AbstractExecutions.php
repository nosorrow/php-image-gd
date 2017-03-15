<?php

namespace Executions;

abstract class AbstractExecutions
{
    public $arguments;

    public function __construct($arguments)
    {
        $this->arguments = $arguments;
    }

    abstract public function execute(\Image $image);
}