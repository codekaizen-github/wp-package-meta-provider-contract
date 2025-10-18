<?php
/**
 * Theme Package Meta Provider Factory Contract
 *
 * This interface defines the contract for WordPress theme package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\ThemePackageMetaProviderContract;

interface ThemePackageMetaProviderFactoryContract {

	/**
	 * Create a new ThemePackageMetaProvider instance.
	 *
	 * @return ThemePackageMetaProviderContract A new theme package meta provider instance.
	 */
	public function create(): ThemePackageMetaProviderContract;
}
