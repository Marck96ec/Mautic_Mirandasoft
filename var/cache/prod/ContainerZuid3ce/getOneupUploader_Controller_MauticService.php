<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'oneup_uploader.controller.mautic' shared service.

return $this->services['oneup_uploader.controller.mautic'] = new \Mautic\AssetBundle\Controller\UploadController($this, ${($_ = isset($this->services['oneup_uploader.storage.asset']) ? $this->services['oneup_uploader.storage.asset'] : ($this->services['oneup_uploader.storage.asset'] = new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage($this->getEnv('nullable:resolve:MAUTIC_UPLOAD_DIR')))) && false ?: '_'}, ${($_ = isset($this->services['mautic.asset.upload.error.handler']) ? $this->services['mautic.asset.upload.error.handler'] : $this->load('getMautic_Asset_Upload_Error_HandlerService.php')) && false ?: '_'}, $this->getParameter('oneup_uploader.config.asset'), 'asset');
