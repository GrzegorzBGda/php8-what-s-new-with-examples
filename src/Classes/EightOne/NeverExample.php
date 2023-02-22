<?php

namespace Example\Classes\EightOne;
/**
 * A function or method declared with the NEVER type indicates
 * that it will not return a value and will either throw an exception
 * or end the script’s execution with a call of die(), exit(), trigger_error(), or something similar.
 */
class NeverExample
{
    private string $uri;

    public function setUri(string $uri): never
    {
        $this->uri = $uri;
        exit();
    }

    public function setUriRegister(): never
    {
        $this->setUri('register');
    }
}

