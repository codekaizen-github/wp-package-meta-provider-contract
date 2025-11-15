<?php
/**
 * Plugin Package Meta Value Service Contract
 *
 * This interface defines the contract for WordPress plugin package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Value\PackageMeta\PluginPackageMetaValueContract;

interface PluginPackageMetaValueServiceContract extends PackageMetaValueServiceContract {

	/**
	 * Create a new PluginPackageMetaValue instance.
	 *
	 * @return PluginPackageMetaValueContract A new plugin package meta provider instance.
	 */
	public function getPackageMeta(): PluginPackageMetaValueContract;
}
