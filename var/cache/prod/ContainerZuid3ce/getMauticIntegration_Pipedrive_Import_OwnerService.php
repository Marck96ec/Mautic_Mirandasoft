<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic_integration.pipedrive.import.owner' shared service.

return $this->services['mautic_integration.pipedrive.import.owner'] = new \MauticPlugin\MauticCrmBundle\Integration\Pipedrive\Import\OwnerImport(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});