<?php
namespace ActivityPub;

interface ObjectInterface
{
    public function getID(): string;
    public function getType(): string;
}
