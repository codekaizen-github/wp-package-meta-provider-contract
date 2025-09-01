<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract;

interface ThemePackageMetaProviderFactoryContract
{
    public function create(): ThemePackageMetaContract;
}
