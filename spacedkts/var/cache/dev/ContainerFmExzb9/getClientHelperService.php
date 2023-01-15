<?php

namespace ContainerFmExzb9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Helper\ClientHelper' shared autowired service.
     *
     * @return \App\Helper\ClientHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'ClientHelper.php';

        return $container->privates['App\\Helper\\ClientHelper'] = new \App\Helper\ClientHelper(($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()));
    }
}