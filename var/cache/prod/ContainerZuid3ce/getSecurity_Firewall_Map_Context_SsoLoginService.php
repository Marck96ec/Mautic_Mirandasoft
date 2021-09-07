<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.sso_login' shared service.

return $this->services['security.firewall.map.context.sso_login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->load('getSecurity_ChannelListenerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.context_listener.1']) ? $this->services['security.context_listener.1'] : $this->load('getSecurity_ContextListener_1Service.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['security.authentication.listener.mautic.sso_login']) ? $this->services['security.authentication.listener.mautic.sso_login'] : $this->load('getSecurity_Authentication_Listener_Mautic_SsoLoginService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['security.authentication.listener.anonymous.sso_login']) ? $this->services['security.authentication.listener.anonymous.sso_login'] : $this->load('getSecurity_Authentication_Listener_Anonymous_SsoLoginService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->load('getSecurity_AccessListenerService.php')) && false ?: '_'};
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'}, 'sso_login', NULL, NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('sso_login', 'security.user_checker', 'security.request_matcher.x5nzfqb', true, false, 'mautic.user.provider', 'mautic', NULL, NULL, NULL, [0 => 'mautic_plugin_auth', 1 => 'anonymous'], NULL));
