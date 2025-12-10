<?php
/**
 * File containing ThemePackageMetaValueServiceFactoryContract interface.
 *
 *  @package CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Service\Value\PackageMeta
 * @subpackage Factory
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Service\Value\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta\ThemePackageMetaValueServiceContract;

interface ThemePackageMetaValueServiceFactoryContract extends PackageMetaValueServiceFactoryContract {
	/**
	 * Create a new instance.
	 *
	 * @return ThemePackageMetaValueServiceContract The created Theme package meta value service.
	 */
	public function create(): ThemePackageMetaValueServiceContract;
}
