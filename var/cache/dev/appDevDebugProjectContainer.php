<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX7iwgy6\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX7iwgy6/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerX7iwgy6.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerX7iwgy6\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerX7iwgy6\appDevDebugProjectContainer(array(
    'container.build_hash' => 'X7iwgy6',
    'container.build_id' => '72fd76d5',
    'container.build_time' => 1519314931,
));
