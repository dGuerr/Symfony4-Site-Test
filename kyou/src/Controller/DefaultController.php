<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController  extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render(
            'index.html.twig',
            [
                'images' => $this->getImages(),
            ]
        );
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('Admin/index.html.twig');
    }

    private function getImages()
    {
        $images = [];

        $finder = new Finder();
        $finder->files()->in($this->getParameter('pictures_directory'));

        foreach ($finder as $file) {
            $images[] = $file->getFilename();
        }

        return $images;
    }
}