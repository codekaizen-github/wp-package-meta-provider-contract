<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract;

interface PackageMetaDetailsPluginContract extends PackageMetaDetailsContract
{
    public function getSections(): array;
    /** @return array<string,string> */
    public function getNetwork(): bool;
    /** @return string[] */
    public function getRequiresPlugins(): array;
}
