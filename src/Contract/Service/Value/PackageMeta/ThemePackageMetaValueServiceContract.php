<?php
/**
 * Theme Package Meta Value Service Contract
 *
 * This interface defines the contract for WordPress theme package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Value\PackageMeta\ThemePackageMetaValueContract;

interface ThemePackageMetaValueServiceContract extends PackageMetaValueServiceContract {

	/**
	 * Create a new ThemePackageMetaValue instance.
	 *
	 * @return ThemePackageMetaValueContract A new theme package meta provider instance.
	 */
	public function getPackageMeta(): ThemePackageMetaValueContract;
}
