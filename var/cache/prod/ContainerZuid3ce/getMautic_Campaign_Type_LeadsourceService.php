<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.type.leadsource' shared service.

return $this->services['mautic.campaign.type.leadsource'] = new \Mautic\CampaignBundle\Form\Type\CampaignLeadSourceType(${($_ = isset($this->services['mautic.factory']) ? $this->services['mautic.factory'] : ($this->services['mautic.factory'] = new \Mautic\CoreBundle\Factory\MauticFactory($this))) && false ?: '_'});
