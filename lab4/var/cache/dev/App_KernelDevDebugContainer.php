<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ1Erwme\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ1Erwme/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ1Erwme.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ1Erwme\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ1Erwme\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q1Erwme',
    'container.build_id' => '568a6dd5',
    'container.build_time' => 1606071270,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ1Erwme');
