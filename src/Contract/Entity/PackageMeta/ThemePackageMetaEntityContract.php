<?php
/**
 * Theme Package Meta Entity Contract
 *
 * This interface defines the contract for WordPress theme package metadata providers.
 *
 * @package CodeKaizen\WPPackageMetaEntityContract\Contract\Entity\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaEntityContract\Contract\Entity\PackageMeta;

interface ThemePackageMetaEntityContract extends PackageMetaEntityContract {

	/**
	 * Get the parent theme template name.
	 *
	 * @return string|null The parent theme template name or null if not a child theme.
	 */
	public function getTemplate(): ?string;

	/**
	 * Get the theme status.
	 *
	 * @return string|null The theme status or null if not available.
	 */
	public function getStatus(): ?string;
}
