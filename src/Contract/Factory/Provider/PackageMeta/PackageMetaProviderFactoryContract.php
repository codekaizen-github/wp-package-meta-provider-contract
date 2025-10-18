<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\PackageMetaProviderContract;

interface PackageMetaProviderFactoryContract
{
    public function create(): PackageMetaProviderContract;
}
