<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.data_exchange.mautic.full_object_report_builder' shared service.

return $this->services['mautic.integrations.sync.data_exchange.mautic.full_object_report_builder'] = new \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\ReportBuilder\FullObjectReportBuilder(${($_ = isset($this->services['mautic.integrations.sync.data_exchange.mautic.field_builder']) ? $this->services['mautic.integrations.sync.data_exchange.mautic.field_builder'] : $this->load('getMautic_Integrations_Sync_DataExchange_Mautic_FieldBuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.internal.object_provider']) ? $this->services['mautic.integrations.internal.object_provider'] : $this->load('getMautic_Integrations_Internal_ObjectProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
