<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.field.settings.background_service' shared service.

return $this->services['mautic.lead.field.settings.background_service'] = new \Mautic\LeadBundle\Field\BackgroundService(${($_ = isset($this->services['mautic.lead.model.field']) ? $this->services['mautic.lead.model.field'] : $this->getMautic_Lead_Model_FieldService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.field.custom_field_column']) ? $this->services['mautic.lead.field.custom_field_column'] : $this->getMautic_Lead_Field_CustomFieldColumnService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.field.lead_field_saver']) ? $this->services['mautic.lead.field.lead_field_saver'] : $this->getMautic_Lead_Field_LeadFieldSaverService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.field.dispatcher.field_column_background_dispatcher']) ? $this->services['mautic.lead.field.dispatcher.field_column_background_dispatcher'] : $this->load('getMautic_Lead_Field_Dispatcher_FieldColumnBackgroundDispatcherService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.field.notification.custom_field']) ? $this->services['mautic.lead.field.notification.custom_field'] : $this->load('getMautic_Lead_Field_Notification_CustomFieldService.php')) && false ?: '_'});
