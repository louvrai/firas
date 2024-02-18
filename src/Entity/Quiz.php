<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column]
    private ?int $temp = null;

    #[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Question::class)]
    private Collection $idQuestion;

    #[ORM\OneToMany(mappedBy: 'idQuiz', targetEntity: Evaluation::class)]
    private Collection $evaluations;

    #[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Cours::class)]
    private Collection $idCours;

    public function __construct()
    {
        $this->idQuestion = new ArrayCollection();
        $this->evaluations = new ArrayCollection();
        $this->idCours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTemp(): ?int
    {
        return $this->temp;
    }

    public function setTemp(int $temp): static
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getIdQuestion(): Collection
    {
        return $this->idQuestion;
    }

    public function addIdQuestion(Question $idQuestion): static
    {
        if (!$this->idQuestion->contains($idQuestion)) {
            $this->idQuestion->add($idQuestion);
            $idQuestion->setQuiz($this);
        }

        return $this;
    }

    public function removeIdQuestion(Question $idQuestion): static
    {
        if ($this->idQuestion->removeElement($idQuestion)) {
            // set the owning side to null (unless already changed)
            if ($idQuestion->getQuiz() === $this) {
                $idQuestion->setQuiz(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Evaluation>
     */
    public function getEvaluations(): Collection
    {
        return $this->evaluations;
    }

    public function addEvaluation(Evaluation $evaluation): static
    {
        if (!$this->evaluations->contains($evaluation)) {
            $this->evaluations->add($evaluation);
            $evaluation->setIdQuiz($this);
        }

        return $this;
    }

    public function removeEvaluation(Evaluation $evaluation): static
    {
        if ($this->evaluations->removeElement($evaluation)) {
            // set the owning side to null (unless already changed)
            if ($evaluation->getIdQuiz() === $this) {
                $evaluation->setIdQuiz(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getIdCours(): Collection
    {
        return $this->idCours;
    }

    public function addIdCour(Cours $idCour): static
    {
        if (!$this->idCours->contains($idCour)) {
            $this->idCours->add($idCour);
            $idCour->setQuiz($this);
        }

        return $this;
    }

    public function removeIdCour(Cours $idCour): static
    {
        if ($this->idCours->removeElement($idCour)) {
            // set the owning side to null (unless already changed)
            if ($idCour->getQuiz() === $this) {
                $idCour->setQuiz(null);
            }
        }

        return $this;
    }
}
