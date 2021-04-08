<?php

abstract class Animal
{
    protected $path;

    abstract public function getDescription(): string;
    public function setImage(string $path)
    {
        $this->path = $path;
    }
}

?>