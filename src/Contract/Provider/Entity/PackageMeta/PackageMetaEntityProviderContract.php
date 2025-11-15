<?php
/**
 * Package Meta Entity Provider Contract
 *
 * This interface defines the contract for WordPress package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaEntityContract\Contract\Provider\Entity\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaEntityContract\Contract\Provider\Entity\PackageMeta;

use CodeKaizen\WPPackageMetaEntityContract\Contract\Entity\PackageMeta\PackageMetaEntityContract;

interface PackageMetaEntityProviderContract {

	/**
	 * Create a new PackageMetaEntity instance.
	 *
	 * @return PackageMetaEntityContract A new package meta provider instance.
	 */
	public function create(): PackageMetaEntityContract;
}
