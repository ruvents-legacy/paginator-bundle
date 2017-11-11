<?php

namespace Ruvents\PaginatorBundle;

use Ruvents\PaginatorBundle\DependencyInjection\Compiler\AddTwigPathPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RuventsPaginatorBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new AddTwigPathPass());
    }
}
