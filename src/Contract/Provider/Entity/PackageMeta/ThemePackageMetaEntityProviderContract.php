<?php
/**
 * Theme Package Meta Entity Provider Contract
 *
 * This interface defines the contract for WordPress theme package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaEntityContract\Contract\Provider\Entity\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaEntityContract\Contract\Provider\Entity\PackageMeta;

use CodeKaizen\WPPackageMetaEntityContract\Contract\Entity\PackageMeta\ThemePackageMetaEntityContract;

interface ThemePackageMetaEntityProviderContract extends PackageMetaEntityProviderContract {

	/**
	 * Create a new ThemePackageMetaEntity instance.
	 *
	 * @return ThemePackageMetaEntityContract A new theme package meta provider instance.
	 */
	public function create(): ThemePackageMetaEntityContract;
}
