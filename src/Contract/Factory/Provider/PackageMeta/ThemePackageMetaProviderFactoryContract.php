<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\ThemePackageMetaProviderContract;

interface ThemePackageMetaProviderFactoryContract
{
    public function create(): ThemePackageMetaProviderContract;
}
