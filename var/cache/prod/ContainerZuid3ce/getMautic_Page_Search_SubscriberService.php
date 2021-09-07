<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.page.search.subscriber' shared service.

return $this->services['mautic.page.search.subscriber'] = new \Mautic\PageBundle\EventListener\SearchSubscriber(${($_ = isset($this->services['mautic.helper.user']) ? $this->services['mautic.helper.user'] : $this->getMautic_Helper_UserService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.page.model.page']) ? $this->services['mautic.page.model.page'] : $this->getMautic_Page_Model_PageService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.templating']) ? $this->services['mautic.helper.templating'] : ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
