<?php

namespace ContainerFgjn3Hz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MQ3AADpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MQ3AADp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MQ3AADp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'principal' => ['privates', '.errored..service_locator.MQ3AADp.App\\Entity\\Principal', NULL, 'Cannot autowire service ".service_locator.MQ3AADp": it references class "App\\Entity\\Principal" but no such service exists.'],
        ], [
            'principal' => 'App\\Entity\\Principal',
        ]);
    }
}
