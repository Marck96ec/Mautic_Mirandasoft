<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.helper.cache' shared service.

return $this->services['mautic.helper.cache'] = new \Mautic\CoreBundle\Helper\CacheHelper($this->targetDirs[0], ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.paths']) ? $this->services['mautic.helper.paths'] : $this->getMautic_Helper_PathsService()) && false ?: '_'});