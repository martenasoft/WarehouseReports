<?php

namespace MartenaSoft\WarehouseReports\DependencyInjection;

use MartenaSoft\WarehouseReports\WarehouseReportsBundle;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(WarehouseReportsBundle::getConfigName());

        return $treeBuilder;
    }
}