<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.own.entity_descriptor_provider' shared service.

return $this->services['lightsaml.own.entity_descriptor_provider'] = \LightSaml\SymfonyBridgeBundle\Factory\OwnEntityDescriptorProviderFactory::build($this->getEnv('MAUTIC_SAML_ENTITY_ID'), ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, 'lightsaml_sp.login_check', NULL, ${($_ = isset($this->services['lightsaml.own.credential_store']) ? $this->services['lightsaml.own.credential_store'] : $this->load('getLightsaml_Own_CredentialStoreService.php')) && false ?: '_'});
