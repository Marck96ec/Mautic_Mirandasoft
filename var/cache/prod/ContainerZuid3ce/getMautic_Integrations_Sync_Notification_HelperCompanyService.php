<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.notification.helper_company' shared service.

return $this->services['mautic.integrations.sync.notification.helper_company'] = new \Mautic\IntegrationsBundle\Sync\Notification\Helper\CompanyHelper(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'});