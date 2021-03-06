<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.config_manager' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ConfigManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ConfigManager.php';

$this->services['fos_ck_editor.config_manager'] = $instance = new \FOS\CKEditorBundle\Model\ConfigManager();

$instance->setConfigs(array('my_config' => array('extraPlugins' => 'codesnippet')));
$instance->setDefaultConfig('my_config');

return $instance;
