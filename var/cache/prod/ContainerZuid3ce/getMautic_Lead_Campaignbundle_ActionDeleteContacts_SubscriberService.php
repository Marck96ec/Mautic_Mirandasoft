<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.campaignbundle.action_delete_contacts.subscriber' shared service.

return $this->services['mautic.lead.campaignbundle.action_delete_contacts.subscriber'] = new \Mautic\LeadBundle\EventListener\CampaignActionDeleteContactSubscriber(${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.helper.removed_contact_tracker']) ? $this->services['mautic.campaign.helper.removed_contact_tracker'] : ($this->services['mautic.campaign.helper.removed_contact_tracker'] = new \Mautic\CampaignBundle\Helper\RemovedContactTracker())) && false ?: '_'});
