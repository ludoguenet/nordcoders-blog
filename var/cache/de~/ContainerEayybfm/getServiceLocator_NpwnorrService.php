<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.npwnorr' shared service.

return $this->services['service_locator.npwnorr'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('encoder' => function () {
    return ${($_ = isset($this->services['security.password_encoder']) ? $this->services['security.password_encoder'] : $this->load('getSecurity_PasswordEncoderService.php')) && false ?: '_'};
}));
