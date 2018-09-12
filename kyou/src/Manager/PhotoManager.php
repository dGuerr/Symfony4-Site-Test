<?php

namespace App\Manager;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;

class PhotoManager
{
    /**
     * @param $imageRepositoryPath
     * @return array
     */
    public function getImages($imageRepositoryPath)
    {
        $images = [];

        $finder = new Finder();
        $finder->files()->in($imageRepositoryPath);

        foreach ($finder as $file) {
            $images[] = $file->getFilename();
        }

        return $images;
    }
}