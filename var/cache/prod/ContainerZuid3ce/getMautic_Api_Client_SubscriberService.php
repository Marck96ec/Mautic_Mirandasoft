<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.api.client.subscriber' shared service.

return $this->services['mautic.api.client.subscriber'] = new \Mautic\ApiBundle\EventListener\ClientSubscriber(${($_ = isset($this->services['mautic.helper.ip_lookup']) ? $this->services['mautic.helper.ip_lookup'] : $this->getMautic_Helper_IpLookupService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.core.model.auditlog']) ? $this->services['mautic.core.model.auditlog'] : $this->getMautic_Core_Model_AuditlogService()) && false ?: '_'});
