<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oneup_uploader.command.clear_chunks' shared service.

$this->services['oneup_uploader.command.clear_chunks'] = $instance = new \Oneup\UploaderBundle\Command\ClearChunkCommand(${($_ = isset($this->services['oneup_uploader.chunk_manager']) ? $this->services['oneup_uploader.chunk_manager'] : $this->load('getOneupUploader_ChunkManagerService.php')) && false ?: '_'});

$instance->setName('oneup:uploader:clear-chunks');

return $instance;
