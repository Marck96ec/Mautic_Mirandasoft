<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.executioner.condition' shared service.

return $this->services['mautic.campaign.executioner.condition'] = new \Mautic\CampaignBundle\Executioner\Event\ConditionExecutioner(${($_ = isset($this->services['mautic.campaign.dispatcher.condition']) ? $this->services['mautic.campaign.dispatcher.condition'] : $this->load('getMautic_Campaign_Dispatcher_ConditionService.php')) && false ?: '_'});
