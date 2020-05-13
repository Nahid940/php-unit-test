<?php

use PHPUnit\Framework\TestCase;
class FucntionTest extends  TestCase
{

    public function testAddFunctionReturnSum()
    {
        require 'function.php';

        $this->assertEquals(4,add(2,2));
    }

}