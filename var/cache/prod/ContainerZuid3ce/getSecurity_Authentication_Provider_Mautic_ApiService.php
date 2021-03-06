<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.mautic.api' shared service.

return $this->services['security.authentication.provider.mautic.api'] = new \Mautic\UserBundle\Security\Authenticator\PreAuthAuthenticator(${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['mautic.user.provider']) ? $this->services['mautic.user.provider'] : $this->getMautic_User_ProviderService()) && false ?: '_'}, 'api');
