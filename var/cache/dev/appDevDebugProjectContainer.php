<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1npxq6w\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1npxq6w/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container1npxq6w.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container1npxq6w\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container1npxq6w\appDevDebugProjectContainer(array(
    'container.build_hash' => '1npxq6w',
    'container.build_id' => 'b86fdfb6',
    'container.build_time' => 1529436800,
), __DIR__.\DIRECTORY_SEPARATOR.'Container1npxq6w');
