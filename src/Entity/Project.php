<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $authentication;

    /**
     * @ORM\Column(type="boolean")
     */
    private $devTools;

    /**
     * @ORM\Column(type="boolean")
     */
    private $testingTools;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frontend;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAuthentication(): ?bool
    {
        return $this->authentication;
    }

    public function setAuthentication(bool $authentication): self
    {
        $this->authentication = $authentication;

        return $this;
    }

    public function getDevTools(): ?bool
    {
        return $this->devTools;
    }

    public function setDevTools(bool $devTools): self
    {
        $this->devTools = $devTools;

        return $this;
    }

    public function getTestingTools(): ?bool
    {
        return $this->testingTools;
    }

    public function setTestingTools(bool $testingTools): self
    {
        $this->testingTools = $testingTools;

        return $this;
    }

    public function getFrontend(): ?string
    {
        return $this->frontend;
    }

    public function setFrontend(string $frontend): self
    {
        $this->frontend = $frontend;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'type' => $this->getType(),
            'authentication' => $this->getAuthentication(),
            'devTools' => $this->getDevTools(),
            'testingTools' => $this->getTestingTools(),
            'frontend' => $this->getFrontend(),
            'createdAt' => $this->getCreatedAt()
        ];
    }
}
