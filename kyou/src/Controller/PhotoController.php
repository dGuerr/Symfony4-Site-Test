<?php

namespace App\Controller;

use App\Entity\Picture;
use App\Form\PictureType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PhotoController  extends AbstractController
{
    private $imageUploadPath;
    /**
     * @Route("/photo/new", name="app_photo_new")
     */
    public function new(Request $request)
    {
        $picture = new Picture();
        $form = $this->createForm(PictureType::class, $picture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $picture->getPhoto();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            $file->move(
                $this->getParameter('pictures_directory'),
                $fileName
            );

            $picture->setPhoto($fileName);


            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('upload.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
}