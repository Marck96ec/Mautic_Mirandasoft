<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.page.reportbundle.subscriber' shared service.

return $this->services['mautic.page.reportbundle.subscriber'] = new \Mautic\PageBundle\EventListener\ReportSubscriber(${($_ = isset($this->services['mautic.lead.model.company_report_data']) ? $this->services['mautic.lead.model.company_report_data'] : $this->load('getMautic_Lead_Model_CompanyReportDataService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.page.repository.hit']) ? $this->services['mautic.page.repository.hit'] : $this->load('getMautic_Page_Repository_HitService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
