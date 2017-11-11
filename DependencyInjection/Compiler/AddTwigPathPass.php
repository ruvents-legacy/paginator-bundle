<?php

namespace Ruvents\PaginatorBundle\DependencyInjection\Compiler;

use Ruvents\Paginator\Paginator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AddTwigPathPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('twig.loader.native_filesystem')) {
            return;
        }

        $path = dirname((new \ReflectionClass(Paginator::class))->getFileName()).'/../templates/twig';

        $container->getDefinition('twig.loader.native_filesystem')
            ->addMethodCall('addPath', [$path, 'RuventsPaginator']);
    }
}
