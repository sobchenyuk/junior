<?php
namespace Junior;

class App
{
    private $container;

    public function __construct($container = [])
    {
        dump($container);
        $this->container = $container;
    }
}