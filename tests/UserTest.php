<?php
//include_once '../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
class UserTest extends  TestCase
{

    public function testReturnUserFullName()
    {
        $user=new \App\User();
        $user->firstName="Abul";
        $user->lastName="Kashem";

        $this->assertEquals('Abul Kashem',$user->returnFullName());
    }

    public function testFullNameEmptyByDefault()
    {
        $user=new \App\User();
        $this->assertEquals('',$user->returnFullName());
    }
}