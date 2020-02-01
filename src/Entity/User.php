<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    *
    * @var  
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
    */
    private $comments;
    
    public function getId(): ?int
    {
        return $this->id;
    }
}
