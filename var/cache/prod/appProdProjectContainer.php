<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX1xdfmw\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX1xdfmw/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerX1xdfmw.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerX1xdfmw\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerX1xdfmw\appProdProjectContainer([
    'container.build_hash' => 'X1xdfmw',
    'container.build_id' => '16545cf2',
    'container.build_time' => 1560990426,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX1xdfmw');