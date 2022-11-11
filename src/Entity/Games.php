<?php

namespace App\Entity;

use App\Repository\GamesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamesRepository::class)]
class Games
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column]
    private ?int $metascore = null;

    #[ORM\OneToOne(inversedBy: 'games', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Platforms $platform = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getMetascore(): ?int
    {
        return $this->metascore;
    }

    public function setMetascore(int $metascore): self
    {
        $this->metascore = $metascore;

        return $this;
    }

    public function getPlatform(): ?Platforms
    {
        return $this->platform;
    }

    public function setPlatform(Platforms $platform): self
    {
        $this->platform = $platform;

        return $this;
    }
}
