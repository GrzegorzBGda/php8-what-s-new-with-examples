<?php

namespace Example\Classes;

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

