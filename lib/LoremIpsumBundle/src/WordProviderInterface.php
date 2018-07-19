<?php
/**
 * Created by PhpStorm.
 * User: MCH3730
 * Date: 19/07/2018
 * Time: 18:35
 */

namespace KnpU\LoremIpsumBundle;


interface WordProviderInterface
{
    /**
     * Return an array of words to use for the fake text.
     *
     * @return array
     */
    public function getWordList(): array;
}