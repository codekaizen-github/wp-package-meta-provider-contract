<?php

namespace CodeKaizen\WPPackageMetaProviderContract\Contract;

interface PluginPackageMetaProviderFactoryContract
{
    public function create(): PluginPackageMetaContract;
}
