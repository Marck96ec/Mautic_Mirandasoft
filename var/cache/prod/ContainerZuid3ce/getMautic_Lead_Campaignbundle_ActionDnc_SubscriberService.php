<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.campaignbundle.action_dnc.subscriber' shared service.

return $this->services['mautic.lead.campaignbundle.action_dnc.subscriber'] = new \Mautic\LeadBundle\EventListener\CampaignActionDNCSubscriber(${($_ = isset($this->services['mautic.lead.model.dnc']) ? $this->services['mautic.lead.model.dnc'] : $this->load('getMautic_Lead_Model_DncService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'});
