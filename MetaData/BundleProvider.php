<?php
declare(strict_types=1);

namespace Kevin3ssen\EntityGeneratorBundle\MetaData;

class BundleProvider
{
    protected $bundlesMetaData;

    public function __construct($bundlesMetaData)
    {
        $this->bundlesMetaData = $bundlesMetaData;
    }

    public function getBundleNameOptions(): array
    {
        $options = [];
        foreach ($this->bundlesMetaData as $bundleName => $bundleData) {
            if (strpos($bundleData['path'], '/vendor/') !== false) {
                continue;
            }
            $options[] = $bundleName;
        }
        return $options;
    }

    public function getBundleNames(): array
    {
        return array_keys($this->bundlesMetaData);
    }

    public function getBundleNamespaceByName(?string $name): ?string
    {
        foreach ($this->bundlesMetaData as $bundleName => $bundleData) {
            if ($name === $bundleName) {
                return $bundleData['namespace'];
            }
        }
        return MetaEntity::NO_BUNDLE_NAMESPACE;
    }
}