<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.updatelead_action' shared service.

return $this->services['mautic.form.type.updatelead_action'] = new \Mautic\LeadBundle\Form\Type\UpdateLeadActionType(${($_ = isset($this->services['mautic.lead.model.field']) ? $this->services['mautic.lead.model.field'] : $this->getMautic_Lead_Model_FieldService()) && false ?: '_'});
