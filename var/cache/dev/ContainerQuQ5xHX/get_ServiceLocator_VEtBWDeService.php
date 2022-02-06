<?php

namespace ContainerQuQ5xHX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VEtBWDeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VEtBWDe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VEtBWDe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contacto' => ['privates', '.errored..service_locator.VEtBWDe.App\\Entity\\Contacto', NULL, 'Cannot autowire service ".service_locator.VEtBWDe": it references class "App\\Entity\\Contacto" but no such service exists.'],
        ], [
            'contacto' => 'App\\Entity\\Contacto',
        ]);
    }
}
