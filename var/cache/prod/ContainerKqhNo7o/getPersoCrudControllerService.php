<?php

namespace ContainerKqhNo7o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersoCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\PersoCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PersoCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\PersoCrudController'] = $instance = new \App\Controller\Admin\PersoCrudController();

        $instance->setContainer(($container->privates['.service_locator.ipvtXDO'] ?? $container->load('get_ServiceLocator_IpvtXDOService'))->withContext('App\\Controller\\Admin\\PersoCrudController', $container));

        return $instance;
    }
}
