<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNjcku7u\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNjcku7u/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNjcku7u.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNjcku7u\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNjcku7u\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Njcku7u',
    'container.build_id' => '681b6626',
    'container.build_time' => 1528548632,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNjcku7u');
