<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.query.builder.special.dnc' shared service.

return $this->services['mautic.lead.query.builder.special.dnc'] = new \Mautic\LeadBundle\Segment\Query\Filter\DoNotContactFilterQueryBuilder(${($_ = isset($this->services['mautic.lead.model.random_parameter_name']) ? $this->services['mautic.lead.model.random_parameter_name'] : ($this->services['mautic.lead.model.random_parameter_name'] = new \Mautic\LeadBundle\Segment\RandomParameterName())) && false ?: '_'});
