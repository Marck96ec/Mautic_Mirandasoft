<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.helper' shared service.

return $this->services['knp_menu.helper'] = new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->load('getKnpMenu_RendererProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->load('getKnpMenu_MenuProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.manipulator']) ? $this->services['knp_menu.manipulator'] : ($this->services['knp_menu.manipulator'] = new \Knp\Menu\Util\MenuManipulator())) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->load('getKnpMenu_MatcherService.php')) && false ?: '_'});
