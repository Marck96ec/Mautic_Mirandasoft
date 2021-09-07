<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.fos_oauth_server.main' shared service.

return $this->services['security.authentication.provider.fos_oauth_server.main'] = new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider(${($_ = isset($this->services['mautic.user.provider']) ? $this->services['mautic.user.provider'] : $this->getMautic_User_ProviderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->load('getFosOauthServer_ServerService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : ($this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'});