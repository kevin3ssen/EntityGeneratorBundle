<?php
declare(strict_types=1);

namespace Kevin3ssen\EntityGeneratorBundle\MetaData\Property;

use Doctrine\DBAL\Types\Type;

class BooleanMetaProperty extends AbstractPrimitiveMetaProperty implements BooleanMetaPropertyInterface
{
    public const ORM_TYPE = Type::BOOLEAN;
    public const RETURN_TYPE = 'bool';
    public const ORM_TYPE_ALIAS = 'bool';
}