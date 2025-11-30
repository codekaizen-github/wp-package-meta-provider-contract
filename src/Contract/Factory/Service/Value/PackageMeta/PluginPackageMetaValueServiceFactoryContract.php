<?php
/**
 * File containing PluginPackageMetaValueServiceFactoryContract interface.
 *
 *  @package CodeKaizen\WPPackageMetaProviderContract\Factory\Provider\PackageMeta
 * @subpackage Factory
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Factory\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta\PluginPackageMetaValueServiceContract;

interface PluginPackageMetaValueServiceFactoryContract {
	/**
	 * Create a new instance.
	 *
	 * @return PluginPackageMetaValueServiceContract The created plugin package meta value service.
	 */
	public function create(): PluginPackageMetaValueServiceContract;
}
