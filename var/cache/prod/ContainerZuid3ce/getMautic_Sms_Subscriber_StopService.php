<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.sms.subscriber.stop' shared service.

return $this->services['mautic.sms.subscriber.stop'] = new \Mautic\SmsBundle\EventListener\StopSubscriber(${($_ = isset($this->services['mautic.lead.model.dnc']) ? $this->services['mautic.lead.model.dnc'] : $this->load('getMautic_Lead_Model_DncService.php')) && false ?: '_'});
