<?php
/**
 * Plugin Package Meta Provider Factory Contract
 *
 * This interface defines the contract for WordPress plugin package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\PluginPackageMetaProviderContract;

interface PluginPackageMetaProviderFactoryContract {

	/**
	 * Create a new PluginPackageMetaProvider instance.
	 *
	 * @return PluginPackageMetaProviderContract A new plugin package meta provider instance.
	 */
	public function create(): PluginPackageMetaProviderContract;
}
