<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Picture
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as picture file.")
     */
    private $photo;

    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }
}