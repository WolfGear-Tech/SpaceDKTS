<?php

namespace App\Entity;

use App\Repository\SpaceshipRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpaceshipRepository::class)]
class Spaceship
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 255)]
    private ?string $manufacturer = null;

    #[ORM\Column]
    private ?int $cost_in_credits = null;

    #[ORM\Column]
    private ?int $length = null;

    #[ORM\Column]
    private ?int $max_atmosphering_speed = null;

    #[ORM\Column]
    private ?int $crew = null;

    #[ORM\Column]
    private ?int $passengers = null;

    #[ORM\Column]
    private ?int $cargo_capacity = null;

    #[ORM\Column(length: 255)]
    private ?string $consumables = null;

    #[ORM\Column]
    private ?float $hyperdrive_rating = null;

    #[ORM\Column]
    private ?int $MGLT = null;

    #[ORM\Column(length: 255)]
    private ?string $starship_class = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getCostInCredits(): ?string
    {
        return $this->cost_in_credits;
    }

    public function setCostInCredits(string $cost_in_credits): self
    {
        $this->cost_in_credits = $cost_in_credits;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getMaxAtmospheringSpeed(): ?int
    {
        return $this->max_atmosphering_speed;
    }

    public function setMaxAtmospheringSpeed(int $max_atmosphering_speed): self
    {
        $this->max_atmosphering_speed = $max_atmosphering_speed;

        return $this;
    }

    public function getCrew(): ?int
    {
        return $this->crew;
    }

    public function setCrew(int $crew): self
    {
        $this->crew = $crew;

        return $this;
    }

    public function getPassengers(): ?int
    {
        return $this->passengers;
    }

    public function setPassengers(int $passengers): self
    {
        $this->passengers = $passengers;

        return $this;
    }

    public function getCargoCapacity(): ?int
    {
        return $this->cargo_capacity;
    }

    public function setCargoCapacity(int $cargo_capacity): self
    {
        $this->cargo_capacity = $cargo_capacity;

        return $this;
    }

    public function getConsumables(): ?string
    {
        return $this->consumables;
    }

    public function setConsumables(string $consumables): self
    {
        $this->consumables = $consumables;

        return $this;
    }

    public function getHyperdriveRating(): ?float
    {
        return $this->hyperdrive_rating;
    }

    public function setHyperdriveRating(float $hyperdrive_rating): self
    {
        $this->hyperdrive_rating = $hyperdrive_rating;

        return $this;
    }

    public function getMGLT(): ?int
    {
        return $this->MGLT;
    }

    public function setMGLT(int $MGLT): self
    {
        $this->MGLT = $MGLT;

        return $this;
    }

    public function getStarshipClass(): ?string
    {
        return $this->starship_class;
    }

    public function setStarshipClass(string $starship_class): self
    {
        $this->starship_class = $starship_class;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
