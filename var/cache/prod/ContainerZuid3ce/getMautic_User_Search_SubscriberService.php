<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.user.search.subscriber' shared service.

return $this->services['mautic.user.search.subscriber'] = new \Mautic\UserBundle\EventListener\SearchSubscriber(${($_ = isset($this->services['mautic.user.model.user']) ? $this->services['mautic.user.model.user'] : $this->getMautic_User_Model_UserService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.user.model.role']) ? $this->services['mautic.user.model.role'] : $this->load('getMautic_User_Model_RoleService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.templating']) ? $this->services['mautic.helper.templating'] : ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});