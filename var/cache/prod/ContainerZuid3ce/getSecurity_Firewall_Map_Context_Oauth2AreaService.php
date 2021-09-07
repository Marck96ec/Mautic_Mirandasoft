<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.oauth2_area' shared service.

$a = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'};

return $this->services['security.firewall.map.context.oauth2_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->load('getSecurity_ChannelListenerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.context_listener.2']) ? $this->services['security.context_listener.2'] : $this->load('getSecurity_ContextListener_2Service.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['security.authentication.listener.form.oauth2_area']) ? $this->services['security.authentication.listener.form.oauth2_area'] : $this->load('getSecurity_Authentication_Listener_Form_Oauth2AreaService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['security.authentication.listener.anonymous.oauth2_area']) ? $this->services['security.authentication.listener.anonymous.oauth2_area'] : $this->load('getSecurity_Authentication_Listener_Anonymous_Oauth2AreaService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->load('getSecurity_AccessListenerService.php')) && false ?: '_'};
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, $a, 'oauth2_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, $a, '/oauth/v2/authorize_login', false), NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('oauth2_area', 'security.user_checker', 'security.request_matcher.nchtftj', true, false, 'mautic.user.provider', 'oauth2_area', 'security.authentication.form_entry_point.oauth2_area', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));