<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract;

interface PackageMetaDetailsPluginInterface extends PackageMetaDetailsInterface
{
    public function getSections(): array;
    /** @return array<string,string> */
    public function getNetwork(): bool;
}
