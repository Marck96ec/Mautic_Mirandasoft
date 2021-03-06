<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.emailbuilder.subscriber' shared service.

return $this->services['mautic.emailbuilder.subscriber'] = new \Mautic\EmailBundle\EventListener\BuilderSubscriber(${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'}, ${($_ = isset($this->services['mautic.email.model.email']) ? $this->services['mautic.email.model.email'] : $this->load('getMautic_Email_Model_EmailService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.page.model.trackable']) ? $this->services['mautic.page.model.trackable'] : $this->getMautic_Page_Model_TrackableService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.page.model.redirect']) ? $this->services['mautic.page.model.redirect'] : $this->getMautic_Page_Model_RedirectService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
