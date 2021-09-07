<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.scheduler' shared service.

return $this->services['mautic.campaign.scheduler'] = new \Mautic\CampaignBundle\Executioner\Scheduler\EventScheduler(${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.event_logger']) ? $this->services['mautic.campaign.event_logger'] : $this->load('getMautic_Campaign_EventLoggerService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.scheduler.interval']) ? $this->services['mautic.campaign.scheduler.interval'] : $this->load('getMautic_Campaign_Scheduler_IntervalService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.scheduler.datetime']) ? $this->services['mautic.campaign.scheduler.datetime'] : $this->load('getMautic_Campaign_Scheduler_DatetimeService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.event_collector']) ? $this->services['mautic.campaign.event_collector'] : $this->load('getMautic_Campaign_EventCollectorService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'});