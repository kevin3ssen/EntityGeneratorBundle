<?php
declare(strict_types=1);

namespace Kevin3ssen\EntityGeneratorBundle\MetaData\Property;

use Doctrine\DBAL\Types\Type;

class SmallIntMetaProperty extends AbstractPrimitiveMetaProperty implements SmallIntMetaPropertyInterface
{
    public const ORM_TYPE = Type::SMALLINT;
    public const ORM_TYPE_ALIAS = 'sint';
    public const RETURN_TYPE = 'int';

    use LengthTrait;
}