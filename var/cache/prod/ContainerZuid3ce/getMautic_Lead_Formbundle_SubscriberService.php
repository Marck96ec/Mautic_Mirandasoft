<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.formbundle.subscriber' shared service.

return $this->services['mautic.lead.formbundle.subscriber'] = new \Mautic\LeadBundle\EventListener\FormSubscriber(${($_ = isset($this->services['mautic.email.model.email']) ? $this->services['mautic.email.model.email'] : $this->load('getMautic_Email_Model_EmailService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.tracker.contact']) ? $this->services['mautic.tracker.contact'] : $this->getMautic_Tracker_ContactService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.ip_lookup']) ? $this->services['mautic.helper.ip_lookup'] : $this->getMautic_Helper_IpLookupService()) && false ?: '_'});
