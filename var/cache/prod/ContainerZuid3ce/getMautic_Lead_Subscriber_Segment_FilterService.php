<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.subscriber.segment.filter' shared service.

return $this->services['mautic.lead.subscriber.segment.filter'] = new \Mautic\LeadBundle\EventListener\SegmentFiltersSubscriber(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.list']) ? $this->services['mautic.lead.model.list'] : $this->getMautic_Lead_Model_ListService()) && false ?: '_'});
