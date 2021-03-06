<?php
declare(strict_types=1);

namespace K3ssen\EntityGeneratorBundle\Command\AttributeQuestion;

use K3ssen\EntityGeneratorBundle\Command\Helper\CommandInfo;
use K3ssen\MetaEntityBundle\MetaData\MetaAttributeInterface;

interface AttributeQuestionInterface
{
    public function doQuestion(CommandInfo $commandInfo, MetaAttributeInterface $metaAttribute);

    public function addAttribute(string $attributeName, array $attributeInfo = []);

    public function supportsAttribute(string $attributeName): bool;
}