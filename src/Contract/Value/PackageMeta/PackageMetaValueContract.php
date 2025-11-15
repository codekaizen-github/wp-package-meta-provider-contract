<?php
/**
 * Package Meta Value Contract
 *
 * This interface defines the contract for WordPress package metadata providers.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Value\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Value\PackageMeta;

use JsonSerializable;

interface PackageMetaValueContract extends JsonSerializable {

	/**
	 * Get the name of the package.
	 *
	 * @return string The package name.
	 */
	public function getName(): string;

	/**
	 * Get the full slug of the package.
	 *
	 * @return string The full slug, including vendor/package format.
	 */
	public function getFullSlug(): string;

	/**
	 * Get the short slug of the package.
	 *
	 * @return string The package short slug.
	 */
	public function getShortSlug(): string;

	/**
	 * Get the version of the package.
	 *
	 * @return string|null The package version or null if not available.
	 */
	public function getVersion(): ?string;

	/**
	 * Get the URL to view package details.
	 *
	 * @return string|null The package view URL or null if not available.
	 */
	public function getViewURL(): ?string;

	/**
	 * Get the URL to download the package.
	 *
	 * @return string|null The package download URL or null if not available.
	 */
	public function getDownloadURL(): ?string;

	/**
	 * Get the tested WordPress version.
	 *
	 * @return string|null The WordPress version tested with or null if not available.
	 */
	public function getTested(): ?string;

	/**
	 * Get the stable version of the package.
	 *
	 * @return string|null The stable version or null if not available.
	 */
	public function getStable(): ?string;

	/**
	 * Get the tags associated with the package.
	 *
	 * @return string[] An array of tags.
	 */
	public function getTags(): array;

	/**
	 * Get the author name.
	 *
	 * @return string|null The author name or null if not available.
	 */
	public function getAuthor(): ?string;

	/**
	 * Get the author URL.
	 *
	 * @return string|null The author URL or null if not available.
	 */
	public function getAuthorURL(): ?string;

	/**
	 * Get the license name.
	 *
	 * @return string|null The license name or null if not available.
	 */
	public function getLicense(): ?string;

	/**
	 * Get the license URL.
	 *
	 * @return string|null The license URL or null if not available.
	 */
	public function getLicenseURL(): ?string;

	/**
	 * Get the short description of the package.
	 *
	 * @return string|null The short description or null if not available.
	 */
	public function getShortDescription(): ?string;

	/**
	 * Get the full description of the package.
	 *
	 * @return string|null The full description or null if not available.
	 */
	public function getDescription(): ?string;

	/**
	 * Get the required WordPress version for the package.
	 *
	 * @return string|null The required WordPress version or null if not available.
	 */
	public function getRequiresWordPressVersion(): ?string;

	/**
	 * Get the required PHP version for the package.
	 *
	 * @return string|null The required PHP version or null if not available.
	 */
	public function getRequiresPHPVersion(): ?string;

	/**
	 * Get the text domain for translations.
	 *
	 * @return string|null The text domain or null if not available.
	 */
	public function getTextDomain(): ?string;

	/**
	 * Get the domain path for translations.
	 *
	 * @return string|null The domain path or null if not available.
	 */
	public function getDomainPath(): ?string;

	/**
	 * Get the icons for the package.
	 *
	 * @return array<string,string> An array of icon URLs, keyed by size or identifier.
	 */
	public function getIcons(): array;

	/**
	 * Get the banners for the package.
	 *
	 * @return array<string,string> An array of banner URLs, keyed by size or identifier.
	 */
	public function getBanners(): array;

	/**
	 * Get the RTL banners for the package.
	 *
	 * @return array<string,string> An array of RTL banner URLs, keyed by size or identifier.
	 */
	public function getBannersRTL(): array;
}
