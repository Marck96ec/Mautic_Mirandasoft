<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.kernel.listener.command_terminate' shared service.

return $this->services['mautic.kernel.listener.command_terminate'] = new \Mautic\CoreBundle\EventListener\ConsoleTerminateListener(${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'});