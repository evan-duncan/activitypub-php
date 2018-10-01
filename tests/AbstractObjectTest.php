<?php
namespace ActivityPub;

use PHPUnit\Framework\TestCase;

class AbstractObjectTestCase extends TestCase
{
    public function testMustHaveID()
    {
        $id = rand();
        $stub = $this->getMockForAbstractClass(AbstractObject::class);
        $stub->setID($id);
        $this->assertEquals($id, $stub->getId());
    }

    public function testIfIDIsNullEmptyStringIsReturned()
    {
        $stub = $this->getMockForAbstractClass(AbstractObject::class);
        $this->assertEquals('', $stub->getId());
    }

    public function testMustHaveType()
    {
        $type = "Order";
        $stub = $this->getMockForAbstractClass(AbstractObject::class);
        $stub->setType($type);
        $this->assertEquals($type, $stub->getType());
    }
}
