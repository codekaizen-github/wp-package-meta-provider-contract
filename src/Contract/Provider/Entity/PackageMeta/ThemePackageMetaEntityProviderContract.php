<?php
/**
 * Theme Package Meta Entity Provider Contract
 *
 * This interface defines the contract for WordPress theme package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\Entity\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\Entity\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Entity\PackageMeta\ThemePackageMetaEntityContract;

interface ThemePackageMetaEntityProviderContract extends PackageMetaEntityProviderContract {

	/**
	 * Create a new ThemePackageMetaEntity instance.
	 *
	 * @return ThemePackageMetaEntityContract A new theme package meta provider instance.
	 */
	public function get(): ThemePackageMetaEntityContract;
}
