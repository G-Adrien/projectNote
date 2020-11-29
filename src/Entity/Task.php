<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status_task;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name_task;

    /**
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="tasks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatusTask(): ?bool
    {
        return $this->status_task;
    }

    public function setStatusTask(bool $status_task): self
    {
        $this->status_task = $status_task;

        return $this;
    }

    public function getNameTask(): ?string
    {
        return $this->name_task;
    }

    public function setNameTask(string $name_task): self
    {
        $this->name_task = $name_task;

        return $this;
    }

    public function getProjectId(): ?Project
    {
        return $this->project_id;
    }

    public function setProjectId(?Project $project_id): self
    {
        $this->project_id = $project_id;

        return $this;
    }
}
