<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.user.fixture.role' shared service.

return $this->services['mautic.user.fixture.role'] = new \Mautic\UserBundle\DataFixtures\ORM\LoadRoleData(${($_ = isset($this->services['mautic.user.model.role']) ? $this->services['mautic.user.model.role'] : $this->load('getMautic_User_Model_RoleService.php')) && false ?: '_'});
