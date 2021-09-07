<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.sms.transport_chain' shared service.

$this->services['mautic.sms.transport_chain'] = $instance = new \Mautic\SmsBundle\Sms\TransportChain($this->getEnv('nullable:resolve:MAUTIC_SMS_TRANSPORT'), ${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'});

$instance->addTransport('mautic.sms.twilio.transport', ${($_ = isset($this->services['mautic.sms.twilio.transport']) ? $this->services['mautic.sms.twilio.transport'] : $this->load('getMautic_Sms_Twilio_TransportService.php')) && false ?: '_'}, 'mautic.sms.twilio.transport', 'Twilio');

return $instance;