<?php
/**
 * Plugin Package Meta Provider Contract
 *
 * This interface defines the contract for WordPress plugin package metadata providers.
 *
 * @package CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta
 */

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta;

use CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta\PackageMetaProviderContract;

interface PluginPackageMetaProviderContract extends PackageMetaProviderContract {

	/**
	 * Get the plugin sections for display.
	 *
	 * @return array<string,string> An array of sections, keyed by section name.
	 */
	public function getSections(): array;

	/**
	 * Get whether the plugin is network-wide.
	 *
	 * @return bool True if the plugin is network-wide, false otherwise.
	 */
	public function getNetwork(): bool;

	/**
	 * Get the plugins required by this plugin.
	 *
	 * @return string[] An array of required plugin slugs.
	 */
	public function getRequiresPlugins(): array;
}
