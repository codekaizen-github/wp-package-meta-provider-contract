<?php
/**
 * File containing ThemePackageMetaValueServiceFactoryContract interface.
 *
 *  @package CodeKaizen\WPPackageMetaProviderContract\Factory\Provider\PackageMeta\Theme
 * @subpackage Factory
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Factory\Provider\PackageMeta\Theme;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta\ThemePackageMetaValueServiceContract;

interface ThemePackageMetaValueServiceFactoryContract {
	/**
	 * Create a new instance.
	 *
	 * @return ThemePackageMetaValueServiceContract The created Theme package meta value service.
	 */
	public function create(): ThemePackageMetaValueServiceContract;
}
