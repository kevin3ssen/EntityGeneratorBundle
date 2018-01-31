<?php
declare(strict_types=1);

namespace Kevin3ssen\EntityGeneratorBundle\Generator\MetaData\Property;

use Doctrine\DBAL\Types\Type;

class SmallIntProperty extends IntegerProperty
{
    public function setLength(?int $length)
    {
        //TODO: throw exception of too long?
        $this->length = $length;
    }

    public function getOrmType(): string
    {
        return Type::SMALLINT;
    }
}