<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.actions' shared service.

return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->load('getFragment_HandlerService.php')) && false ?: '_'});