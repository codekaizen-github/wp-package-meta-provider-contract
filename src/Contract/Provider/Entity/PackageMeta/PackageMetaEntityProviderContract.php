<?php
/**
 * Package Meta Entity Provider Contract
 *
 * This interface defines the contract for WordPress package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\Entity\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\Entity\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Entity\PackageMeta\PackageMetaEntityContract;

interface PackageMetaEntityProviderContract {

	/**
	 * Create a new PackageMetaEntity instance.
	 *
	 * @return PackageMetaEntityContract A new package meta provider instance.
	 */
	public function create(): PackageMetaEntityContract;
}
