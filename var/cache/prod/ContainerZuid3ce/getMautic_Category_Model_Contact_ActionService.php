<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.category.model.contact.action' shared service.

return $this->services['mautic.category.model.contact.action'] = new \Mautic\CategoryBundle\Model\ContactActionModel(${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'});
