<?php
/**
 * Package Meta Value Service Contract
 *
 * This interface defines the contract for WordPress package metadata provider factories.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Service\Value\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Value\PackageMeta\PackageMetaValueContract;

interface PackageMetaValueServiceContract {

	/**
	 * Create a new PackageMetaValue instance.
	 *
	 * @return PackageMetaValueContract A new package meta provider instance.
	 */
	public function getPackageMeta(): PackageMetaValueContract;
}
