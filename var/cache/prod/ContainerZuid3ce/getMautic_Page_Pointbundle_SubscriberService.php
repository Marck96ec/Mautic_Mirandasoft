<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.page.pointbundle.subscriber' shared service.

return $this->services['mautic.page.pointbundle.subscriber'] = new \Mautic\PageBundle\EventListener\PointSubscriber(${($_ = isset($this->services['mautic.point.model.point']) ? $this->services['mautic.point.model.point'] : $this->load('getMautic_Point_Model_PointService.php')) && false ?: '_'});
