<?php

namespace Ssh\FactoryPattern;


class Platform
{
    private  $platform;

    public function __construct(string $platform)
    {
        $this->platform = new ('\Ssh\FactoryPattern\\'.$platform);
    }

    public function post()
    {
        return $this->platform->post();
    }
}