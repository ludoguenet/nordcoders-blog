<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.plugin_manager' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/PluginManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/PluginManager.php';

$this->services['fos_ck_editor.plugin_manager'] = $instance = new \FOS\CKEditorBundle\Model\PluginManager();

$instance->setPlugins(array('codesnippet' => array('path' => 'bundles/fosckeditor/plugins/codesnippet/', 'filename' => 'plugin.js')));

return $instance;
