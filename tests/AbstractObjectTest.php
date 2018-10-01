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
}
