<?php
/**
 * Plugin Package Meta Entity Provider Contract
 *
 * This interface defines the contract for WordPress plugin package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\Entity\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\Entity\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Entity\PackageMeta\PluginPackageMetaEntityContract;

interface PluginPackageMetaEntityProviderContract extends PackageMetaEntityProviderContract {

	/**
	 * Create a new PluginPackageMetaEntity instance.
	 *
	 * @return PluginPackageMetaEntityContract A new plugin package meta provider instance.
	 */
	public function create(): PluginPackageMetaEntityContract;
}
