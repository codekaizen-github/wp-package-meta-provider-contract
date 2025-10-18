<?php
/**
 * Package Meta Provider Factory Contract
 *
 * This interface defines the contract for WordPress package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Factory\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\PackageMetaProviderContract;

interface PackageMetaProviderFactoryContract {

	/**
	 * Create a new PackageMetaProvider instance.
	 *
	 * @return PackageMetaProviderContract A new package meta provider instance.
	 */
	public function create(): PackageMetaProviderContract;
}
