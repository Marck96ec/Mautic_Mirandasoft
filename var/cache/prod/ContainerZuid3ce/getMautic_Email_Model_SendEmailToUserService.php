<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.model.send_email_to_user' shared service.

return $this->services['mautic.email.model.send_email_to_user'] = new \Mautic\EmailBundle\Model\SendEmailToUser(${($_ = isset($this->services['mautic.email.model.email']) ? $this->services['mautic.email.model.email'] : $this->load('getMautic_Email_Model_EmailService.php')) && false ?: '_'});
