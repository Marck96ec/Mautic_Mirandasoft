<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.category_bundles_form' shared service.

return $this->services['mautic.form.type.category_bundles_form'] = new \Mautic\CategoryBundle\Form\Type\CategoryBundlesType(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
