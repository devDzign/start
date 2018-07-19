<?php
/**
 * Created by PhpStorm.
 * User: MCH3730
 * Date: 19/07/2018
 * Time: 18:21
 */

namespace App\Service;

use KnpU\LoremIpsumBundle\KnpUWordProvider;

class CustomWordProvider extends KnpUWordProvider
{
    public function getWordList(): array
    {
        $words = parent::getWordList();
        $words[] = '*****mouradChabourMourad*****';
        return $words;
    }
}