<?php

class WatchEvent implements ActionEventInterface, EventInterface
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
            'priority' => 100,
        ];
    }

    public function payload() : array
    {
        return [
            'cost' => 100,
            'from' => 'https://github.com/api/v3/watch-event',
        ];
    }

    public function action() : array
    {
        return [
            'comment',
            'reject',
            'close',
            'follow',
        ];
    }
}
