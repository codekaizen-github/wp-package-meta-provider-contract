<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract\Provider\PackageMeta;

interface ThemePackageMetaProviderContract extends PackageMetaProviderContract {

	public function getTemplate(): ?string;
	public function getStatus(): ?string;
}
