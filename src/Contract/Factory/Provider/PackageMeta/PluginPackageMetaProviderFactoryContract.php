<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\PluginPackageMetaProviderContract;

interface PluginPackageMetaProviderFactoryContract {

	public function create(): PluginPackageMetaProviderContract;
}
