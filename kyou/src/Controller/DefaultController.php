<?php

namespace App\Controller;

use App\Manager\PhotoManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @var PhotoManager $photoManager
     */
    private $photoManager;

    /**
     * DefaultController constructor.
     * @param PhotoManager $photoManager
     */
    public function __construct(PhotoManager $photoManager)
    {
        $this->photoManager = $photoManager;
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render(
            'index.html.twig',
            [
                'images' => $this->photoManager->getImages($this->getParameter('pictures_directory')),
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
}