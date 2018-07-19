<?php
/**
 * Created by PhpStorm.
 * User: MCH3730
 * Date: 19/07/2018
 * Time: 17:24
 */

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class KnpULoremIpsumExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        /**
         * Initialiser mon service avac les bonne argument
         */
        $definition = $container->getDefinition('knpu_lorem_ipsum.knpu_ipsum');
        if (null !== $config['word_provider']) {
            $definition->setArgument(0, new Reference($config['word_provider']));
        }
        $definition->setArgument(1, $config['unicorns_are_real']);
        $definition->setArgument(2, $config['min_sunshine']);
//        var_dump($config);die;
    }

    public function getAlias()
    {
        return 'knpu_lorem_ipsum';
    }
}