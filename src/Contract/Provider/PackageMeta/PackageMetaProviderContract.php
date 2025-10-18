<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta;

use JsonSerializable;

interface PackageMetaProviderContract extends JsonSerializable {

	public function getName(): string;
	public function getFullSlug(): string;
	public function getShortSlug(): string;
	public function getVersion(): ?string;
	public function getViewURL(): ?string;
	public function getDownloadURL(): ?string;
	public function getTested(): ?string;
	public function getStable(): ?string;
	/** @return string[] */
	public function getTags(): array;
	public function getAuthor(): ?string;
	public function getAuthorURL(): ?string;
	public function getLicense(): ?string;
	public function getLicenseURL(): ?string;
	public function getShortDescription(): ?string;
	public function getDescription(): ?string;
	public function getRequiresWordPressVersion(): ?string;
	public function getRequiresPHPVersion(): ?string;
	public function getTextDomain(): ?string;
	public function getDomainPath(): ?string;
	/** @return array<string,string> */
	public function getIcons(): array;
	/** @return array<string,string> */
	public function getBanners(): array;
	/** @return array<string,string> */
	public function getBannersRTL(): array;
}
