<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.leadbundle.subscriber' shared service.

return $this->services['mautic.campaign.leadbundle.subscriber'] = new \Mautic\CampaignBundle\EventListener\LeadSubscriber(${($_ = isset($this->services['mautic.campaign.membership.manager']) ? $this->services['mautic.campaign.membership.manager'] : $this->load('getMautic_Campaign_Membership_ManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.event_collector']) ? $this->services['mautic.campaign.event_collector'] : $this->load('getMautic_Campaign_EventCollectorService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.model.campaign']) ? $this->services['mautic.campaign.model.campaign'] : $this->load('getMautic_Campaign_Model_CampaignService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});