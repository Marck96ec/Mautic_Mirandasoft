<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.transport.momentum' shared service.

return $this->services['mautic.transport.momentum'] = new \Mautic\EmailBundle\Swiftmailer\Transport\MomentumTransport(${($_ = isset($this->services['mautic.transport.momentum.callback']) ? $this->services['mautic.transport.momentum.callback'] : $this->load('getMautic_Transport_Momentum_CallbackService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.transport.momentum.facade']) ? $this->services['mautic.transport.momentum.facade'] : $this->load('getMautic_Transport_Momentum_FacadeService.php')) && false ?: '_'});
