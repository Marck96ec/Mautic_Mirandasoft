<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.stage.campaignbundle.subscriber' shared service.

return $this->services['mautic.stage.campaignbundle.subscriber'] = new \Mautic\StageBundle\EventListener\CampaignSubscriber(${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.stage.model.stage']) ? $this->services['mautic.stage.model.stage'] : $this->load('getMautic_Stage_Model_StageService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});