<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.core.configbundle.subscriber' shared service.

return $this->services['mautic.core.configbundle.subscriber'] = new \Mautic\CoreBundle\EventListener\ConfigSubscriber(${($_ = isset($this->services['mautic.helper.language']) ? $this->services['mautic.helper.language'] : $this->load('getMautic_Helper_LanguageService.php')) && false ?: '_'});
