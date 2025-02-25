<?php

// src/Entity/Computer.php
namespace App\Entity;
use App\Repository\ComputerRepository;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity(repositoryClass: ComputerRepository::class)]
class Computer
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column]
private ?int $id = null;
#[ORM\Column(length: 255)]
private ?string $name = null;
#[ORM\Column]
private ?int $price = null;
public function getId(): ?int
{
return $this->id;
}
// ... getter and setter methods
}