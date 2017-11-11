<?php

namespace Ruvents\PaginatorBundle\DependencyInjection;

use Ruvents\PaginatorBundle\EventListener\PageOutOfRangeExceptionListener;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class RuventsPaginatorExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register(PageOutOfRangeExceptionListener::class)
            ->setPublic(false)
            ->addTag('kernel.event_subscriber');
    }
}
