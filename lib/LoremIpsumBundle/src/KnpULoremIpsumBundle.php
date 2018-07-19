<?php
/**
 * Created by PhpStorm.
 * User: MCH3730
 * Date: 19/07/2018
 * Time: 17:22
 */

namespace KnpU\LoremIpsumBundle;


use KnpU\LoremIpsumBundle\DependencyInjection\KnpULoremIpsumExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KnpULoremIpsumBundle extends Bundle
{
    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new KnpULoremIpsumExtension();
        }
        return $this->extension;
    }
}