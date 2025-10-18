<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\PackageMetaProviderContract;

interface PluginPackageMetaProviderContract extends PackageMetaProviderContract
{
    /** @return array<string,string> */
    public function getSections(): array;
    public function getNetwork(): bool;
    /** @return string[] */
    public function getRequiresPlugins(): array;
}
