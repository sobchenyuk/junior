<?php
namespace Junior;
class App
{
    private $container;

    public function __construct($container = [])
    {
        var_dump($container);
        $this->container = $container;
    }
}