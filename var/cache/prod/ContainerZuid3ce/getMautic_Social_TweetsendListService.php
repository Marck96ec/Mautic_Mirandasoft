<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.social.tweetsend_list' shared service.

return $this->services['mautic.social.tweetsend_list'] = new \MauticPlugin\MauticSocialBundle\Form\Type\TweetSendType(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
