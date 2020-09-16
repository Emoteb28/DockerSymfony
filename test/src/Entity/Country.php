<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Capital;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Club;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCapital(): ?string
    {
        return $this->Capital;
    }

    public function setCapital(string $Capital): self
    {
        $this->Capital = $Capital;

        return $this;
    }

    public function getClub(): ?string
    {
        return $this->Club;
    }

    public function setClub(string $Club): self
    {
        $this->Club = $Club;

        return $this;
    }
}
