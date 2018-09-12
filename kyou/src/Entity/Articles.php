<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @ORM\Table(name="article")
 */
class Articles
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
     * @Assert\NotBlank(message="Please, enter a title.")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="This can't be empty..")
     */
    private $article;

    /**
     * @ORM\Column(type="date")
     *
     * @Assert\NotBlank(message="Please, they must have a date")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Where is the author ?")
     */
    private $author;

    /**
     * @ORM\Column(type="boolean")
     *
     */
    private $status;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
        return;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $date
     */
    public function setDate($date)
    {
        $this->date = $date;
        return;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return;
    }
}