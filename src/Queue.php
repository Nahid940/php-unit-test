<?php


namespace App;


class Queue
{

    protected $items=[];

    public function getCount()
    {
        return count($this->items);
    }
}