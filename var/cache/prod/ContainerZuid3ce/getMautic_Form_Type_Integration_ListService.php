<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.integration.list' shared service.

return $this->services['mautic.form.type.integration.list'] = new \Mautic\PluginBundle\Form\Type\IntegrationsListType(${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'});