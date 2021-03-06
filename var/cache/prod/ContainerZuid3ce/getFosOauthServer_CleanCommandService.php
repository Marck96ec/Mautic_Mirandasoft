<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.clean_command' shared service.

return $this->services['fos_oauth_server.clean_command'] = new \FOS\OAuthServerBundle\Command\CleanCommand(${($_ = isset($this->services['fos_oauth_server.access_token_manager.default']) ? $this->services['fos_oauth_server.access_token_manager.default'] : $this->load('getFosOauthServer_AccessTokenManager_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.refresh_token_manager.default']) ? $this->services['fos_oauth_server.refresh_token_manager.default'] : $this->load('getFosOauthServer_RefreshTokenManager_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.auth_code_manager.default']) ? $this->services['fos_oauth_server.auth_code_manager.default'] : $this->load('getFosOauthServer_AuthCodeManager_DefaultService.php')) && false ?: '_'});
