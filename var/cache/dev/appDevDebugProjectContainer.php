<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWgiucj7\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWgiucj7/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWgiucj7.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWgiucj7\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerWgiucj7\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Wgiucj7',
    'container.build_id' => '6395f7f9',
    'container.build_time' => 1531045940,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerWgiucj7');
