<?php

namespace ContainerKqhNo7o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\CustomAuthenticator' shared autowired service.
     *
     * @return \App\Security\CustomAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\CustomAuthenticator'] = new \App\Security\CustomAuthenticator(($container->services['router'] ?? $container->getRouterService()));
    }
}
