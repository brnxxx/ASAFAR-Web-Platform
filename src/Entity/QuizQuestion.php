<?php

namespace App\Entity;

use App\Repository\QuizQuestionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizQuestionRepository::class)]
#[ORM\Table(name: 'quiz_question')]
class QuizQuestion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    /** @phpstan-ignore property.unusedType */
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: QuizSession::class)]
    #[ORM\JoinColumn(name: 'session_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?QuizSession $session = null;

    #[ORM\Column(type: 'text', nullable: false)]
    private string $question = '';  // ✅

    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private string $answer = '';  // ✅

    /** @var array<int, string> */
    #[ORM\Column(type: 'json')]
    private array $choices = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSession(): ?QuizSession
    {
        return $this->session;
    }

    public function setSession(?QuizSession $session): self
    {
        $this->session = $session;
        return $this;
    }

    public function getQuestion(): string  // ✅
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;
        return $this;
    }

    /** @return array<int, string> */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /** @param array<int, string> $choices */
    public function setChoices(array $choices): self
    {
        $this->choices = $choices;
        return $this;
    }

    public function getAnswer(): string  // ✅
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;
        return $this;
    }
}