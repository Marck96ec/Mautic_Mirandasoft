<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.fetcher' shared service.

return $this->services['mautic.email.fetcher'] = new \Mautic\EmailBundle\MonitoredEmail\Fetcher(${($_ = isset($this->services['mautic.helper.mailbox']) ? $this->services['mautic.helper.mailbox'] : $this->load('getMautic_Helper_MailboxService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
