<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'tasks')]
    private ?TaskList $task_list_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskListId(): ?TaskList
    {
        return $this->task_list_id;
    }

    public function setTaskListId(?TaskList $task_list_id): self
    {
        $this->task_list_id = $task_list_id;

        return $this;
    }
}
