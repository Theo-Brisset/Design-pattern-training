<?php

class PushEvent implements EventInterface
{
    private string $name;

    public function __construct()
    {
        $this->name = 'PushEvent';
    }

    public function name() : string
    {
        return $this->name ;
    }

    public function fields() : array
    {
        return [
            'name' => $this->name,
            'priority' => 999,
        ];
    }

}
