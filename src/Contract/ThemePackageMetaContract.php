<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract;

interface ThemePackageMetaContract extends PackageMetaContract
{
    public function getTemplate(): ?string;
    public function getStatus(): ?string;
}
