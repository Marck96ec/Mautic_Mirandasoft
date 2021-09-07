<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.message.processor.unsubscribe' shared service.

return $this->services['mautic.message.processor.unsubscribe'] = new \Mautic\EmailBundle\MonitoredEmail\Processor\Unsubscribe(${($_ = isset($this->services['swiftmailer.mailer.default.transport.dynamic']) ? $this->services['swiftmailer.mailer.default.transport.dynamic'] : $this->getSwiftmailer_Mailer_Default_Transport_DynamicService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.message.search.contact']) ? $this->services['mautic.message.search.contact'] : $this->load('getMautic_Message_Search_ContactService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.dnc']) ? $this->services['mautic.lead.model.dnc'] : $this->load('getMautic_Lead_Model_DncService.php')) && false ?: '_'});