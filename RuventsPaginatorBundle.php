<?php

namespace Ruvents\Paginator;

use Ruvents\Paginator\DependencyInjection\Compiler\AddTwigPathPass;
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
