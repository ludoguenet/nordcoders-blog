<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ25ndxz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ25ndxz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZ25ndxz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZ25ndxz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZ25ndxz\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Z25ndxz',
    'container.build_id' => 'b42a8a8f',
    'container.build_time' => 1528667023,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ25ndxz');
