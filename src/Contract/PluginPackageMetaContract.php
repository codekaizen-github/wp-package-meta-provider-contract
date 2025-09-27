<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract;

interface PluginPackageMetaContract extends PackageMetaContract
{
    /** @return array<string,string> */
    public function getSections(): array;
    public function getNetwork(): bool;
    /** @return string[] */
    public function getRequiresPlugins(): array;
}
