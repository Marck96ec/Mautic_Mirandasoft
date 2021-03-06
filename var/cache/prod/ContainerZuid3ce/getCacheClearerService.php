<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_clearer' shared service.

return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['cache.system_clearer']) ? $this->services['cache.system_clearer'] : $this->load('getCache_SystemClearerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['mautic.cache.clear_cache_subscriber']) ? $this->services['mautic.cache.clear_cache_subscriber'] : $this->load('getMautic_Cache_ClearCacheSubscriberService.php')) && false ?: '_'};
}, 2));
