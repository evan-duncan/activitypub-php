<?php
namespace ActivityPub;

abstract class AbstractObject implements ObjectInterface
{
    private $id;
    private $type;

    public function setID(string $id)
    {
        $this->id = $id;
    }

    public function getID(): string
    {
        return $this->id ?: '';
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
