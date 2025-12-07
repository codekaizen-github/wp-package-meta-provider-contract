<?php
/**
 * File containing PackageMetaValueServiceFactoryContract interface.
 *
 *  @package CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Service\Value\PackageMeta
 * @subpackage Factory
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Service\Value\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta\PackageMetaValueServiceContract;

interface PackageMetaValueServiceFactoryContract {
	/**
	 * Create a new instance.
	 *
	 * @return PackageMetaValueServiceContract The created  package meta value service.
	 */
	public function create(): PackageMetaValueServiceContract;
}
