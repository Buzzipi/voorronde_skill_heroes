<?php

namespace App\Entity;

use App\Repository\KeuzedelenEntityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KeuzedelenEntityRepository::class)]
class KeuzedelenEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Titel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Beschrijving = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $Startdatum = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $Einddatum = null;

    #[ORM\Column(length: 200)]
    private ?string $Roosterdag = null;

    #[ORM\Column]
    private ?int $slots = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitel(): ?string
    {
        return $this->Titel;
    }

    public function setTitel(string $Titel): static
    {
        $this->Titel = $Titel;

        return $this;
    }

    public function getBeschrijving(): ?string
    {
        return $this->Beschrijving;
    }

    public function setBeschrijving(?string $Beschrijving): static
    {
        $this->Beschrijving = $Beschrijving;

        return $this;
    }

    public function getStartdatum(): ?\DateTime
    {
        return $this->Startdatum;
    }

    public function setStartdatum(\DateTime $Startdatum): static
    {
        $this->Startdatum = $Startdatum;

        return $this;
    }

    public function getEinddatum(): ?\DateTime
    {
        return $this->Einddatum;
    }

    public function setEinddatum(\DateTime $Einddatum): static
    {
        $this->Einddatum = $Einddatum;

        return $this;
    }

    public function getRoosterdag(): ?string
    {
        return $this->Roosterdag;
    }

    public function setRoosterdag(string $Roosterdag): static
    {
        $this->Roosterdag = $Roosterdag;

        return $this;
    }

    public function getSlots(): ?int
    {
        return $this->slots;
    }

    public function setSlots(int $slots): static
    {
        $this->slots = $slots;

        return $this;
    }
}
