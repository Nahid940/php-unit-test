<?php

use PHPUnit\Framework\TestCase;
class QueueTest extends TestCase
{

    public function testNewQueueIsEmpty()
    {
        $queue=new \App\Queue();
        $this->assertEquals(1,$queue->getCount());
    }

}