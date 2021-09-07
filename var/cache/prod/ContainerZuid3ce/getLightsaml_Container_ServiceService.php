<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.container.service' shared service.

return $this->services['lightsaml.container.service'] = new \LightSaml\SymfonyBridgeBundle\Bridge\Container\ServiceContainer(${($_ = isset($this->services['lightsaml.service.assertion_validator']) ? $this->services['lightsaml.service.assertion_validator'] : $this->load('getLightsaml_Service_AssertionValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.assertion_time_validator']) ? $this->services['lightsaml.service.assertion_time_validator'] : ($this->services['lightsaml.service.assertion_time_validator'] = new \LightSaml\Validator\Model\Assertion\AssertionTimeValidator())) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.signature_resolver']) ? $this->services['lightsaml.service.signature_resolver'] : $this->load('getLightsaml_Service_SignatureResolverService.php')) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.endpoint_resolver']) ? $this->services['lightsaml.service.endpoint_resolver'] : $this->load('getLightsaml_Service_EndpointResolverService.php')) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.name_id_validator']) ? $this->services['lightsaml.service.name_id_validator'] : ($this->services['lightsaml.service.name_id_validator'] = new \LightSaml\Validator\Model\NameId\NameIdValidator())) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.binding_factory']) ? $this->services['lightsaml.service.binding_factory'] : $this->load('getLightsaml_Service_BindingFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.signature_validator']) ? $this->services['lightsaml.service.signature_validator'] : $this->load('getLightsaml_Service_SignatureValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.credential_resolver']) ? $this->services['lightsaml.service.credential_resolver'] : $this->load('getLightsaml_Service_CredentialResolverService.php')) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.service.session_processor']) ? $this->services['lightsaml.service.session_processor'] : $this->load('getLightsaml_Service_SessionProcessorService.php')) && false ?: '_'});