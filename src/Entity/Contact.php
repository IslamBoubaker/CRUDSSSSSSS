<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255)]
    private ?string $phoneNumber = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\Column(length: 255)]
    private ?string $projectType = null; 


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getfirstName(): ?string
    {
        return $this->firstName;
    }

    public function setfirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getlastName(): ?string
    {
        return $this->lastName;
    }

    public function setlastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getphoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setphoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

      public function getProjectType(): ?string
    {
        return $this->projectType ; 
    }

    public function setProjectType(string $projectType): static
    {
        $this->projectType = $projectType;

        return $this;

    }
}
