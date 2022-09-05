<?php

namespace ContainerKqhNo7o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Upload_ImageService extends App_KernelProdContainer
{
    /*
     * Gets the private 'vich_uploader.listener.upload.image' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\UploadListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['vich_uploader.listener.upload.image'] = new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('image', new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter(), ($container->privates['vich_uploader.metadata_reader'] ?? $container->getVichUploader_MetadataReaderService()), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')));
    }
}