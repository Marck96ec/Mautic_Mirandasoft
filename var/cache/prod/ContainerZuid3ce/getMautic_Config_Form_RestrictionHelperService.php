<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.config.form.restriction_helper' shared service.

return $this->services['mautic.config.form.restriction_helper'] = new \Mautic\ConfigBundle\Form\Helper\RestrictionHelper(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, $this->parameters['mautic.security.restrictedConfigFields'], 'remove');
