<?php

namespace Example\Classes\EightOne;

use Example\Classes\Helpers\Logger;

class NewInInitializersExample
{
    public Logger $logger;

    public function __construct(?Logger $logger = new Logger())
    {
        $this->logger = $logger;
    }
}