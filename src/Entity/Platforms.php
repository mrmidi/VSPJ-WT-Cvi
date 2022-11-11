<?php

namespace App\Entity;

use App\Repository\PlatformsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatformsRepository::class)]
class Platforms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToOne(mappedBy: 'platform', cascade: ['persist', 'remove'])]
    private ?Games $games = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGames(): ?Games
    {
        return $this->games;
    }

    public function setGames(Games $games): self
    {
        // set the owning side of the relation if necessary
        if ($games->getPlatform() !== $this) {
            $games->setPlatform($this);
        }

        $this->games = $games;

        return $this;
    }

    public function __toString() {
        return $this->name;
    }
}
