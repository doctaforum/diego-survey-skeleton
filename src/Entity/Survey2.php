<?php

namespace App\Entity;

use App\Repository\Survey2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Survey2Repository::class)
 */
class Survey2
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $q1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $q2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $q3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $q4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $q5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $q6;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQ1(): ?int
    {
        return $this->q1;
    }

    public function setQ1(?int $q1): self
    {
        $this->q1 = $q1;

        return $this;
    }

    public function getQ2(): ?int
    {
        return $this->q2;
    }

    public function setQ2(?int $q2): self
    {
        $this->q2 = $q2;

        return $this;
    }

    public function getQ3(): ?int
    {
        return $this->q3;
    }

    public function setQ3(?int $q3): self
    {
        $this->q3 = $q3;

        return $this;
    }

    public function getQ4(): ?int
    {
        return $this->q4;
    }

    public function setQ4(?int $q4): self
    {
        $this->q4 = $q4;

        return $this;
    }

    public function getQ5(): ?int
    {
        return $this->q5;
    }

    public function setQ5(?int $q5): self
    {
        $this->q5 = $q5;

        return $this;
    }

    public function getQ6(): ?int
    {
        return $this->q6;
    }

    public function setQ6(?int $q6): self
    {
        $this->q6 = $q6;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTimeInterface $create_date): self
    {
        $this->create_date = $create_date;

        return $this;
    }
}
