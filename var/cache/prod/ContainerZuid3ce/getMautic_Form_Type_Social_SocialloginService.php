<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.social.sociallogin' shared service.

return $this->services['mautic.form.type.social.sociallogin'] = new \MauticPlugin\MauticSocialBundle\Form\Type\SocialLoginType(${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.form.model.form']) ? $this->services['mautic.form.model.form'] : $this->getMautic_Form_Model_FormService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'});
