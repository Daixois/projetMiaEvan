<?php

namespace ContainerKqhNo7o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Form_Type_FileService extends App_KernelProdContainer
{
    /*
     * Gets the public '.container.private.form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
