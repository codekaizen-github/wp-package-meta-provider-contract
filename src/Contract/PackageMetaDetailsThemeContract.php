<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract;

interface PackageMetaDetailsThemeContract extends PackageMetaDetailsContract
{
    public function getTemplate(): ?string;
}
