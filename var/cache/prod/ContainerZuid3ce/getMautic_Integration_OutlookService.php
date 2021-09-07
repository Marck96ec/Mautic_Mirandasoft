<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integration.outlook' shared service.

return $this->services['mautic.integration.outlook'] = new \MauticPlugin\MauticOutlookBundle\Integration\OutlookIntegration(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.cache_storage']) ? $this->services['mautic.helper.cache_storage'] : $this->load('getMautic_Helper_CacheStorageService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.encryption']) ? $this->services['mautic.helper.encryption'] : $this->getMautic_Helper_EncryptionService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.company']) ? $this->services['mautic.lead.model.company'] : $this->getMautic_Lead_Model_CompanyService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.paths']) ? $this->services['mautic.helper.paths'] : $this->getMautic_Helper_PathsService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.core.model.notification']) ? $this->services['mautic.core.model.notification'] : $this->getMautic_Core_Model_NotificationService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.field']) ? $this->services['mautic.lead.model.field'] : $this->getMautic_Lead_Model_FieldService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.plugin.model.integration_entity']) ? $this->services['mautic.plugin.model.integration_entity'] : $this->load('getMautic_Plugin_Model_IntegrationEntityService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.dnc']) ? $this->services['mautic.lead.model.dnc'] : $this->load('getMautic_Lead_Model_DncService.php')) && false ?: '_'});
